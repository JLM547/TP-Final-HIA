#!/usr/bin/env python3
"""
Módulo de IA para Análisis de Datos y Generación de Reportes
Analiza métricas de Prometheus y genera informes automáticos de desempeño
"""

import requests
import json
import pandas as pd
import numpy as np
from datetime import datetime, timedelta
from pathlib import Path
from reportlab.lib.pagesizes import letter
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle
from reportlab.lib.styles import getSampleStyleSheet
from reportlab.lib import colors
from sklearn.ensemble import IsolationForest
import warnings
import os
from pymongo import MongoClient
warnings.filterwarnings('ignore')

class AnalyticsAI:
    def __init__(self, prometheus_url=None, output_dir="/app/reportes", 
                 mongodb_uri=None, nextcloud_data_path=None):
        self.prometheus_url = prometheus_url or os.getenv('PROMETHEUS_URL', 'http://prometheus:9090')
        self.output_dir = Path(output_dir)
        self.output_dir.mkdir(parents=True, exist_ok=True)
        self.mongodb_uri = mongodb_uri or os.getenv('MONGODB_URI', 'mongodb://admin:admin123@mongo-db:27017/tienda?authSource=admin')
        self.nextcloud_data_path = nextcloud_data_path or os.getenv('NEXTCLOUD_DATA_PATH', '/var/www/html/data')
        
    def query_prometheus(self, query):
        """Ejecuta una query en Prometheus"""
        try:
            response = requests.get(
                f"{self.prometheus_url}/api/v1/query",
                params={"query": query},
                timeout=10
            )
            response.raise_for_status()
            return response.json()
        except Exception as e:
            print(f"Error consultando Prometheus: {e}")
            return None
    
    def get_metrics(self, hours=24):
        """Obtiene métricas de las últimas N horas"""
        end_time = datetime.now()
        start_time = end_time - timedelta(hours=hours)
        
        metrics = {}
        
        # CPU usage - usando métricas de proceso de Prometheus
        cpu_query = 'rate(process_cpu_seconds_total[5m]) * 100'
        metrics['cpu'] = self.query_prometheus(cpu_query)
        
        # Memory usage - memoria residente en bytes
        mem_query = 'process_resident_memory_bytes / 1024 / 1024'  # Convertir a MB
        metrics['memory'] = self.query_prometheus(mem_query)
        
        # Network I/O - bytes recibidos
        net_query = 'rate(process_network_receive_bytes_total[5m]) / 1024 / 1024'  # Convertir a MB/s
        metrics['network'] = self.query_prometheus(net_query)
        
        # HTTP requests - requests HTTP de Prometheus
        http_query = 'rate(prometheus_http_requests_total[5m])'
        metrics['http_requests'] = self.query_prometheus(http_query)
        
        # Queries de Prometheus
        queries_query = 'prometheus_engine_queries'
        metrics['queries'] = self.query_prometheus(queries_query)
        
        # Muestras scrapeadas
        samples_query = 'scrape_samples_scraped'
        metrics['samples'] = self.query_prometheus(samples_query)
        
        return metrics
    
    def detect_anomalies(self, data):
        """Detecta anomalías usando Isolation Forest"""
        if not data or len(data) < 10:
            return []
        
        values = np.array(data).reshape(-1, 1)
        clf = IsolationForest(contamination=0.1, random_state=42)
        predictions = clf.fit_predict(values)
        
        anomalies = []
        for i, pred in enumerate(predictions):
            if pred == -1:  # Anomalía detectada
                anomalies.append({
                    'index': i,
                    'value': float(values[i][0]),
                    'severity': 'high' if abs(values[i][0]) > np.mean(values) + 2 * np.std(values) else 'medium'
                })
        
        return anomalies
    
    def analyze_performance(self, metrics):
        """Analiza el desempeño del sistema"""
        analysis = {
            'timestamp': datetime.now().isoformat(),
            'summary': {},
            'anomalies': [],
            'recommendations': []
        }
        
        # Análisis de CPU
        if metrics.get('cpu') and metrics['cpu'].get('data', {}).get('result'):
            cpu_values = [float(r['value'][1]) for r in metrics['cpu']['data']['result'] if r['value'][1] != 'NaN']
            if cpu_values:
                analysis['summary']['cpu'] = {
                    'avg': np.mean(cpu_values),
                    'max': np.max(cpu_values),
                    'min': np.min(cpu_values),
                    'std': np.std(cpu_values)
                }
                anomalies = self.detect_anomalies(cpu_values)
                if anomalies:
                    analysis['anomalies'].extend([{'metric': 'cpu', **a} for a in anomalies])
                    if np.max(cpu_values) > 80:
                        analysis['recommendations'].append("CPU usage alto detectado. Considerar escalar recursos.")
        
        # Análisis de Memoria
        if metrics.get('memory') and metrics['memory'].get('data', {}).get('result'):
            mem_values = [float(r['value'][1]) for r in metrics['memory']['data']['result'] if r['value'][1] != 'NaN']
            if mem_values:
                analysis['summary']['memory'] = {
                    'avg': np.mean(mem_values),
                    'max': np.max(mem_values),
                    'min': np.min(mem_values),
                    'std': np.std(mem_values)
                }
                if np.max(mem_values) > 1000:  # Más de 1GB
                    analysis['recommendations'].append("Uso de memoria alto. Revisar posibles memory leaks.")
        
        # Análisis de HTTP Requests
        if metrics.get('http_requests') and metrics['http_requests'].get('data', {}).get('result'):
            http_values = [float(r['value'][1]) for r in metrics['http_requests']['data']['result'] if r['value'][1] != 'NaN']
            if http_values:
                analysis['summary']['http_requests'] = {
                    'avg': np.mean(http_values),
                    'max': np.max(http_values),
                    'min': np.min(http_values),
                    'std': np.std(http_values)
                }
                if np.max(http_values) > 100:
                    analysis['recommendations'].append("Alto volumen de requests HTTP. Verificar carga del sistema.")
        
        # Análisis de Network
        if metrics.get('network') and metrics['network'].get('data', {}).get('result'):
            net_values = [float(r['value'][1]) for r in metrics['network']['data']['result'] if r['value'][1] != 'NaN']
            if net_values:
                analysis['summary']['network'] = {
                    'avg': np.mean(net_values),
                    'max': np.max(net_values),
                    'min': np.min(net_values),
                    'std': np.std(net_values)
                }
        
        # Si no hay métricas, agregar mensaje informativo
        if not analysis['summary']:
            analysis['summary']['info'] = {
                'message': 'No se encontraron métricas suficientes. El sistema puede estar recién iniciado o las métricas aún no están disponibles.'
            }
            analysis['recommendations'].append("Esperar más tiempo para que se acumulen métricas o verificar la configuración de Prometheus.")
        
        return analysis
    
    def analyze_project_data(self):
        """Analiza datos del proyecto desde MongoDB"""
        project_data = {
            'timestamp': datetime.now().isoformat(),
            'pedidos': {},
            'ventas': {},
            'productos': {},
            'clientes': {},
            'repartidores': {}
        }
        
        try:
            client = MongoClient(self.mongodb_uri, serverSelectionTimeoutMS=5000)
            db = client['tienda']
            
            # Análisis de Pedidos
            pedidos_count = db.pedidos.count_documents({})
            pedidos_por_estado = {}
            estados = ['pendiente', 'confirmado', 'en_preparacion', 'en_envio', 'entregado', 'cancelado']
            for estado in estados:
                count = db.pedidos.count_documents({'estado': estado})
                if count > 0:
                    pedidos_por_estado[estado] = count
            
            # Pedidos por fecha (últimos 30 días)
            fecha_limite = datetime.now() - timedelta(days=30)
            pedidos_recientes = db.pedidos.count_documents({'fechaPedido': {'$gte': fecha_limite}})
            
            # Total de pedidos
            total_pedidos = db.pedidos.aggregate([
                {'$group': {'_id': None, 'total': {'$sum': '$total'}}}
            ])
            total_pedidos_result = list(total_pedidos)
            total_ventas = total_pedidos_result[0]['total'] if total_pedidos_result else 0
            
            project_data['pedidos'] = {
                'total': pedidos_count,
                'por_estado': pedidos_por_estado,
                'ultimos_30_dias': pedidos_recientes,
                'total_ventas': float(total_ventas)
            }
            
            # Análisis de Ventas
            ventas_count = db.ventas.count_documents({})
            ventas_por_metodo = {}
            metodos = ['Tarjeta de Crédito', 'Tarjeta de Débito', 'Efectivo', 'Transferencia', 'Mercado Pago', 'Otro']
            for metodo in metodos:
                count = db.ventas.count_documents({'metodoPago': metodo})
                if count > 0:
                    ventas_por_metodo[metodo] = count
            
            total_ventas_monto = db.ventas.aggregate([
                {'$group': {'_id': None, 'total': {'$sum': '$montoTotal'}}}
            ])
            total_ventas_result = list(total_ventas_monto)
            total_monto_ventas = total_ventas_result[0]['total'] if total_ventas_result else 0
            
            project_data['ventas'] = {
                'total': ventas_count,
                'por_metodo_pago': ventas_por_metodo,
                'total_monto': float(total_monto_ventas)
            }
            
            # Análisis de Productos
            productos_count = db.productos.count_documents({})
            productos_activos = db.productos.count_documents({'estado': True})
            productos_inactivos = db.productos.count_documents({'estado': False})
            
            # Precio promedio de productos
            precios = db.productos.aggregate([
                {'$group': {'_id': None, 'promedio': {'$avg': '$precio'}, 'max': {'$max': '$precio'}, 'min': {'$min': '$precio'}}}
            ])
            precios_result = list(precios)
            precios_data = precios_result[0] if precios_result else {}
            
            project_data['productos'] = {
                'total': productos_count,
                'activos': productos_activos,
                'inactivos': productos_inactivos,
                'precio_promedio': float(precios_data.get('promedio', 0)),
                'precio_maximo': float(precios_data.get('max', 0)),
                'precio_minimo': float(precios_data.get('min', 0))
            }
            
            # Análisis de Clientes
            clientes_count = db.clientes.count_documents({})
            clientes_con_puntos = db.clientes.count_documents({'puntos': {'$gt': 0}})
            
            # Puntos promedio
            puntos_avg = db.clientes.aggregate([
                {'$group': {'_id': None, 'promedio': {'$avg': '$puntos'}, 'max': {'$max': '$puntos'}}}
            ])
            puntos_result = list(puntos_avg)
            puntos_data = puntos_result[0] if puntos_result else {}
            
            project_data['clientes'] = {
                'total': clientes_count,
                'con_puntos': clientes_con_puntos,
                'puntos_promedio': float(puntos_data.get('promedio', 0)),
                'puntos_maximos': float(puntos_data.get('max', 0))
            }
            
            # Análisis de Repartidores
            repartidores_count = db.repartidores.count_documents({})
            repartidores_por_estado = {}
            estados_repartidor = ['disponible', 'en_entrega', 'fuera_de_servicio']
            for estado in estados_repartidor:
                count = db.repartidores.count_documents({'estado': estado})
                if count > 0:
                    repartidores_por_estado[estado] = count
            
            project_data['repartidores'] = {
                'total': repartidores_count,
                'por_estado': repartidores_por_estado
            }
            
            client.close()
            
        except Exception as e:
            print(f"Error analizando datos del proyecto: {e}")
            project_data['error'] = str(e)
        
        return project_data
    
    def analyze_nextcloud_files(self):
        """Analiza archivos en NextCloud"""
        files_data = {
            'timestamp': datetime.now().isoformat(),
            'total_files': 0,
            'total_size_mb': 0,
            'by_extension': {},
            'by_folder': {},
            'recent_files': []
        }
        
        try:
            # Buscar archivos en la ruta de datos de NextCloud
            if os.path.exists(self.nextcloud_data_path):
                admin_path = Path(self.nextcloud_data_path) / "admin" / "files"
                if admin_path.exists():
                    total_size = 0
                    file_count = 0
                    extensions = {}
                    folders = {}
                    
                    for root, dirs, files in os.walk(admin_path):
                        folder_name = os.path.relpath(root, admin_path)
                        if folder_name == '.':
                            folder_name = 'Raíz'
                        
                        folder_size = 0
                        folder_files = 0
                        
                        for file in files:
                            file_path = Path(root) / file
                            try:
                                size = file_path.stat().st_size
                                total_size += size
                                folder_size += size
                                file_count += 1
                                folder_files += 1
                                
                                ext = file_path.suffix.lower() or 'sin_extension'
                                extensions[ext] = extensions.get(ext, 0) + 1
                                
                                # Archivos recientes (últimos 7 días)
                                mtime = datetime.fromtimestamp(file_path.stat().st_mtime)
                                if (datetime.now() - mtime).days <= 7:
                                    files_data['recent_files'].append({
                                        'name': file,
                                        'path': str(file_path.relative_to(admin_path)),
                                        'size_mb': round(size / (1024 * 1024), 2),
                                        'modified': mtime.isoformat()
                                    })
                            except Exception:
                                pass
                        
                        if folder_files > 0:
                            folders[folder_name] = {
                                'files': folder_files,
                                'size_mb': round(folder_size / (1024 * 1024), 2)
                            }
                    
                    files_data['total_files'] = file_count
                    files_data['total_size_mb'] = round(total_size / (1024 * 1024), 2)
                    files_data['by_extension'] = extensions
                    files_data['by_folder'] = folders
                    files_data['recent_files'] = sorted(files_data['recent_files'], 
                                                       key=lambda x: x['modified'], 
                                                       reverse=True)[:10]  # Top 10
            else:
                files_data['error'] = f"Ruta de NextCloud no encontrada: {self.nextcloud_data_path}"
        
        except Exception as e:
            print(f"Error analizando archivos de NextCloud: {e}")
            files_data['error'] = str(e)
        
        return files_data
    
    def generate_report(self, full_analysis):
        """Genera un reporte PDF con el análisis completo"""
        report_file = self.output_dir / f"reporte_desempeno_{datetime.now().strftime('%Y%m%d_%H%M%S')}.pdf"
        
        doc = SimpleDocTemplate(str(report_file), pagesize=letter)
        story = []
        styles = getSampleStyleSheet()
        
        # Título
        title = Paragraph("Reporte Completo de Análisis del Sistema", styles['Title'])
        story.append(title)
        story.append(Spacer(1, 12))
        
        # Fecha
        date_text = f"Generado: {full_analysis['timestamp']}"
        story.append(Paragraph(date_text, styles['Normal']))
        story.append(Spacer(1, 20))
        
        # ===== MÉTRICAS DEL SISTEMA =====
        story.append(Paragraph("1. Métricas del Sistema", styles['Heading2']))
        story.append(Spacer(1, 12))
        
        system_analysis = full_analysis.get('system_metrics', {})
        if system_analysis.get('summary'):
            # Verificar si hay mensaje informativo
            if 'info' in system_analysis['summary']:
                story.append(Paragraph(f"<i>{system_analysis['summary']['info']['message']}</i>", styles['Normal']))
                story.append(Spacer(1, 12))
            
            # Crear tabla solo si hay métricas reales (no solo info)
            metrics_with_data = {k: v for k, v in system_analysis['summary'].items() if k != 'info' and isinstance(v, dict) and 'avg' in v}
            
            if metrics_with_data:
                summary_data = [['Métrica', 'Promedio', 'Máximo', 'Mínimo', 'Desviación']]
                for metric, values in metrics_with_data.items():
                    # Determinar unidad según la métrica
                    if 'cpu' in metric.lower():
                        unit = '%'
                    elif 'memory' in metric.lower():
                        unit = 'MB'
                    elif 'network' in metric.lower():
                        unit = 'MB/s'
                    elif 'http' in metric.lower():
                        unit = 'req/s'
                    else:
                        unit = ''
                    
                    summary_data.append([
                        metric.upper().replace('_', ' '),
                        f"{values['avg']:.2f} {unit}",
                        f"{values['max']:.2f} {unit}",
                        f"{values['min']:.2f} {unit}",
                        f"{values['std']:.2f} {unit}"
                    ])
                
                table = Table(summary_data)
                table.setStyle(TableStyle([
                    ('BACKGROUND', (0, 0), (-1, 0), colors.grey),
                    ('TEXTCOLOR', (0, 0), (-1, 0), colors.whitesmoke),
                    ('ALIGN', (0, 0), (-1, -1), 'CENTER'),
                    ('FONTNAME', (0, 0), (-1, 0), 'Helvetica-Bold'),
                    ('FONTSIZE', (0, 0), (-1, 0), 12),
                    ('BOTTOMPADDING', (0, 0), (-1, 0), 12),
                    ('BACKGROUND', (0, 1), (-1, -1), colors.beige),
                    ('GRID', (0, 0), (-1, -1), 1, colors.black)
                ]))
                story.append(table)
                story.append(Spacer(1, 20))
        
        # Anomalías
        if system_analysis.get('anomalies'):
            story.append(Paragraph("Anomalías Detectadas", styles['Heading2']))
            story.append(Spacer(1, 12))
            for anomaly in system_analysis['anomalies'][:10]:  # Limitar a 10
                anomaly_text = f"<b>{anomaly['metric'].upper()}</b>: Valor {anomaly['value']:.2f} (Severidad: {anomaly['severity']})"
                story.append(Paragraph(anomaly_text, styles['Normal']))
            story.append(Spacer(1, 20))
        
        # Recomendaciones del sistema
        if system_analysis.get('recommendations'):
            story.append(Paragraph("Recomendaciones del Sistema", styles['Heading2']))
            story.append(Spacer(1, 12))
            for rec in system_analysis['recommendations']:
                story.append(Paragraph(f"• {rec}", styles['Normal']))
            story.append(Spacer(1, 20))
        
        # ===== DATOS DEL PROYECTO =====
        story.append(Paragraph("2. Análisis de Datos del Proyecto", styles['Heading2']))
        story.append(Spacer(1, 12))
        
        project_data = full_analysis.get('project_data', {})
        if project_data and 'error' not in project_data:
            # Pedidos
            if project_data.get('pedidos'):
                pedidos = project_data['pedidos']
                story.append(Paragraph("<b>Pedidos:</b>", styles['Heading3']))
                pedidos_text = f"Total: {pedidos.get('total', 0)} | Últimos 30 días: {pedidos.get('ultimos_30_dias', 0)} | Total ventas: ${pedidos.get('total_ventas', 0):.2f}"
                story.append(Paragraph(pedidos_text, styles['Normal']))
                if pedidos.get('por_estado'):
                    estados_text = "Estados: " + ", ".join([f"{k}: {v}" for k, v in pedidos['por_estado'].items()])
                    story.append(Paragraph(estados_text, styles['Normal']))
                story.append(Spacer(1, 12))
            
            # Ventas
            if project_data.get('ventas'):
                ventas = project_data['ventas']
                story.append(Paragraph("<b>Ventas:</b>", styles['Heading3']))
                ventas_text = f"Total: {ventas.get('total', 0)} | Monto total: ${ventas.get('total_monto', 0):.2f}"
                story.append(Paragraph(ventas_text, styles['Normal']))
                if ventas.get('por_metodo_pago'):
                    metodos_text = "Métodos de pago: " + ", ".join([f"{k}: {v}" for k, v in ventas['por_metodo_pago'].items()])
                    story.append(Paragraph(metodos_text, styles['Normal']))
                story.append(Spacer(1, 12))
            
            # Productos
            if project_data.get('productos'):
                productos = project_data['productos']
                story.append(Paragraph("<b>Productos:</b>", styles['Heading3']))
                productos_text = f"Total: {productos.get('total', 0)} | Activos: {productos.get('activos', 0)} | Inactivos: {productos.get('inactivos', 0)}"
                story.append(Paragraph(productos_text, styles['Normal']))
                precios_text = f"Precio promedio: ${productos.get('precio_promedio', 0):.2f} | Máximo: ${productos.get('precio_maximo', 0):.2f} | Mínimo: ${productos.get('precio_minimo', 0):.2f}"
                story.append(Paragraph(precios_text, styles['Normal']))
                story.append(Spacer(1, 12))
            
            # Clientes
            if project_data.get('clientes'):
                clientes = project_data['clientes']
                story.append(Paragraph("<b>Clientes:</b>", styles['Heading3']))
                clientes_text = f"Total: {clientes.get('total', 0)} | Con puntos: {clientes.get('con_puntos', 0)} | Puntos promedio: {clientes.get('puntos_promedio', 0):.0f}"
                story.append(Paragraph(clientes_text, styles['Normal']))
                story.append(Spacer(1, 12))
            
            # Repartidores
            if project_data.get('repartidores'):
                repartidores = project_data['repartidores']
                story.append(Paragraph("<b>Repartidores:</b>", styles['Heading3']))
                repartidores_text = f"Total: {repartidores.get('total', 0)}"
                story.append(Paragraph(repartidores_text, styles['Normal']))
                if repartidores.get('por_estado'):
                    estados_rep_text = "Estados: " + ", ".join([f"{k}: {v}" for k, v in repartidores['por_estado'].items()])
                    story.append(Paragraph(estados_rep_text, styles['Normal']))
                story.append(Spacer(1, 20))
        else:
            story.append(Paragraph("<i>No se pudieron obtener datos del proyecto</i>", styles['Normal']))
            story.append(Spacer(1, 20))
        
        # ===== ARCHIVOS DE NEXTCLOUD =====
        story.append(Paragraph("3. Análisis de Archivos en NextCloud", styles['Heading2']))
        story.append(Spacer(1, 12))
        
        nextcloud_data = full_analysis.get('nextcloud_files', {})
        if nextcloud_data and 'error' not in nextcloud_data:
            story.append(Paragraph(f"<b>Total de archivos:</b> {nextcloud_data.get('total_files', 0)}", styles['Normal']))
            story.append(Paragraph(f"<b>Tamaño total:</b> {nextcloud_data.get('total_size_mb', 0):.2f} MB", styles['Normal']))
            story.append(Spacer(1, 12))
            
            if nextcloud_data.get('by_extension'):
                story.append(Paragraph("<b>Archivos por extensión:</b>", styles['Heading3']))
                for ext, count in sorted(nextcloud_data['by_extension'].items(), key=lambda x: x[1], reverse=True)[:10]:
                    story.append(Paragraph(f"{ext}: {count} archivos", styles['Normal']))
                story.append(Spacer(1, 12))
            
            if nextcloud_data.get('by_folder'):
                story.append(Paragraph("<b>Archivos por carpeta:</b>", styles['Heading3']))
                for folder, data in sorted(nextcloud_data['by_folder'].items(), key=lambda x: x[1]['size_mb'], reverse=True)[:10]:
                    story.append(Paragraph(f"{folder}: {data['files']} archivos ({data['size_mb']:.2f} MB)", styles['Normal']))
                story.append(Spacer(1, 12))
            
            if nextcloud_data.get('recent_files'):
                story.append(Paragraph("<b>Archivos recientes (últimos 7 días):</b>", styles['Heading3']))
                for file_info in nextcloud_data['recent_files'][:5]:
                    story.append(Paragraph(f"• {file_info['name']} ({file_info['size_mb']:.2f} MB)", styles['Normal']))
        else:
            story.append(Paragraph("<i>No se pudieron obtener datos de NextCloud</i>", styles['Normal']))
        
        doc.build(story)
        return report_file
    
    def run_analysis(self):
        """Ejecuta el análisis completo"""
        print("Iniciando análisis de métricas del sistema...")
        metrics = self.get_metrics(hours=24)
        print("Métricas obtenidas, analizando...")
        system_analysis = self.analyze_performance(metrics)
        
        print("Analizando datos del proyecto (MongoDB)...")
        project_data = self.analyze_project_data()
        
        print("Analizando archivos de NextCloud...")
        nextcloud_data = self.analyze_nextcloud_files()
        
        # Combinar todos los análisis
        full_analysis = {
            'timestamp': datetime.now().isoformat(),
            'system_metrics': system_analysis,
            'project_data': project_data,
            'nextcloud_files': nextcloud_data
        }
        
        print("Análisis completado, generando reporte...")
        report_file = self.generate_report(full_analysis)
        print(f"Reporte generado: {report_file}")
        
        # Guardar también en JSON
        json_file = self.output_dir / f"analisis_{datetime.now().strftime('%Y%m%d_%H%M%S')}.json"
        with open(json_file, 'w', encoding='utf-8') as f:
            json.dump(full_analysis, f, indent=2, ensure_ascii=False)
        print(f"Análisis JSON guardado: {json_file}")
        
        return full_analysis, report_file

if __name__ == "__main__":
    ai = AnalyticsAI()
    ai.run_analysis()

