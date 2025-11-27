// src/app/services/pedido/pedido.service.ts

import { Injectable } from '@angular/core';
import { HttpClient, HttpParams, HttpHeaders } from '@angular/common/http'; // Importa HttpHeaders
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { API_BASE_URL } from '../../core/constants/constants'; // Asegúrate de que esta ruta sea correcta
import { IPedidoPayload } from '../../shared/pedido.interface'; // Importa IPedidoPayload
import { IPedido } from '../../shared/interfaces'; // Importa IPedido
import { AuthService } from '../../core/auth/auth'; // Importa AuthService

const PEDIDO_API = `${API_BASE_URL}/pedido`; // Ruta base de la API para pedidos (ajusta si es diferente)

@Injectable({
  providedIn: 'root'
})
export class PedidoService {

  constructor(
    private http: HttpClient,
    private authService: AuthService // Inyecta AuthService
  ) { }

  /**
   * Genera los encabezados HTTP con el token de autenticación.
   * @returns HttpHeaders con el token JWT.
   */
  private getAuthHeaders(): HttpHeaders {
    const token = this.authService.getToken(); // Obtiene el token del AuthService
    let headers = new HttpHeaders({
      'Content-Type': 'application/json'
    });
    if (token) {
      headers = headers.set('Authorization', `Bearer ${token}`); // Usa 'Bearer' para el token JWT
    }
    return headers;
  }

  /**
   * @description Obtiene una lista de pedidos con información de paginación.
   * Dependiendo del rol, el backend filtra automáticamente.
   * @param estados Opcional. Array de estados por los que filtrar (ej. ['pendiente', 'en_preparacion']).
   * @param page Opcional. Número de página (por defecto 1).
   * @param limit Opcional. Límite de resultados por página (por defecto 50, máximo 200).
   * @returns Un Observable con un objeto que contiene pedidos y información de paginación.
   */
  getPedidos(
    estados?: string[],
    repartidorId?: string,
    clienteId?: string,
    fechaDesde?: string,
    fechaHasta?: string,
    searchTerm?: string,
    page?: number,
    limit?: number
  ): Observable<{ pedidos: IPedido[], paginacion: any }> {
    let params = new HttpParams();

    if (estados && estados.length > 0) {
      params = params.set('estados', estados.join(','));
    }
    if (repartidorId) {
      params = params.set('repartidorId', repartidorId);
    }
    if (clienteId) {
      params = params.set('clienteId', clienteId);
    }
    if (fechaDesde) {
      params = params.set('fechaDesde', fechaDesde);
    }
    if (fechaHasta) {
      params = params.set('fechaHasta', fechaHasta);
    }
    if (searchTerm) {
      params = params.set('searchTerm', searchTerm);
    }
    if (page) {
      params = params.set('page', page.toString());
    }
    if (limit) {
      params = params.set('limit', limit.toString());
    }

    return this.http.get<any>(PEDIDO_API, { headers: this.getAuthHeaders(), params })
      .pipe(
        map((response: any) => {
          // Si la respuesta es un array (compatibilidad hacia atrás)
          if (Array.isArray(response)) {
            return {
              pedidos: response,
              paginacion: {
                total: response.length,
                pagina: 1,
                limite: response.length,
                totalPaginas: 1,
                tieneSiguiente: false,
                tieneAnterior: false
              }
            };
          }
          // Si es un objeto con 'pedidos' y 'paginacion'
          if (response && response.pedidos && response.paginacion) {
            return {
              pedidos: response.pedidos,
              paginacion: response.paginacion
            };
          }
          // Si solo tiene 'pedidos' sin paginación
          if (response && response.pedidos) {
            return {
              pedidos: response.pedidos,
              paginacion: {
                total: response.pedidos.length,
                pagina: 1,
                limite: response.pedidos.length,
                totalPaginas: 1,
                tieneSiguiente: false,
                tieneAnterior: false
              }
            };
          }
          // Si no, devolvemos vacío
          return {
            pedidos: [],
            paginacion: {
              total: 0,
              pagina: 1,
              limite: 50,
              totalPaginas: 0,
              tieneSiguiente: false,
              tieneAnterior: false
            }
          };
        })
      );
  }

  /**
   * @description Obtiene un pedido por su ID.
   * @param id El ID del pedido.
   * @returns Un Observable con el pedido.
   */
  getPedidoById(id: string): Observable<IPedido> {
    // APLICA LOS ENCABEZADOS DE AUTENTICACIÓN AQUÍ
    return this.http.get<IPedido>(`${PEDIDO_API}/${id}`, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Actualiza el estado de un pedido.
   * Esta es la función clave para el Supervisor de Cocina y el Repartidor.
   * @param id El ID del pedido a actualizar.
   * @param nuevoEstado El nuevo estado del pedido.
   * @returns Un Observable con la respuesta del backend.
   */
  updateEstadoPedido(id: string, nuevoEstado: IPedido['estado']): Observable<any> {
    // APLICA LOS ENCABEZADOS DE AUTENTICACIÓN AQUÍ
    return this.http.patch(`${PEDIDO_API}/${id}/estado`, { estado: nuevoEstado }, { headers: this.getAuthHeaders() });
  }

  // --- Métodos adicionales que podrías necesitar más adelante o para otros roles ---

  /**
   * @description Crea un nuevo pedido. (Principalmente para el cliente)
   * Acepta directamente el IPedidoPayload que se construye en el frontend.
   * @param pedidoData Los datos del pedido a crear.
   * @returns Un Observable con la respuesta del backend.
   */
  createPedido(pedidoData: IPedidoPayload): Observable<any> {
    // APLICA LOS ENCABEZADOS DE AUTENTICACIÓN AQUÍ
    return this.http.post(PEDIDO_API, pedidoData, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Actualiza cualquier campo de un pedido. (Principalmente para admin/supervisor_ventas)
   * @param id El ID del pedido a actualizar.
   * @param updateData Los campos a actualizar.
   * @returns Un Observable con la respuesta del backend.
   */
  updatePedido(id: string, updateData: Partial<IPedido>): Observable<any> {
    // APLICA LOS ENCABEZADOS DE AUTENTICACIÓN AQUÍ
    return this.http.put(`${PEDIDO_API}/${id}`, updateData, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Elimina un pedido. (Solo para admin)
   * @param id El ID del pedido a eliminar.
   * @returns Un Observable con la respuesta del backend.
   */
  deletePedido(id: string): Observable<any> {
    // APLICA LOS ENCABEZADOS DE AUTENTICACIÓN AQUÍ
    return this.http.delete(`${PEDIDO_API}/${id}`, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Obtiene pedidos asignados a un repartidor específico, opcionalmente filtrados por estado.
   * @param repartidorId El ID del repartidor.
   * @param estados Opcional. Array de estados por los que filtrar (ej. ['en_envio', 'entregado']).
   * @param page Opcional. Número de página.
   * @param limit Opcional. Límite de resultados por página.
   * @returns Un Observable con un objeto que contiene pedidos y información de paginación.
   */
  getPedidosByRepartidorId(repartidorId: string, estados?: string[], page?: number, limit?: number): Observable<{ pedidos: IPedido[], paginacion: any }> {
    let params = new HttpParams().set('repartidorId', repartidorId);
    if (estados && estados.length > 0) {
      params = params.set('estados', estados.join(','));
    }
    if (page) {
      params = params.set('page', page.toString());
    }
    if (limit) {
      params = params.set('limit', limit.toString());
    }
    // Llama al endpoint principal `/pedido` que tu `listarPedidos` ya maneja
    return this.http.get<any>(PEDIDO_API, { headers: this.getAuthHeaders(), params })
      .pipe(
        map((response: any) => {
          // Si la respuesta es un array (compatibilidad hacia atrás)
          if (Array.isArray(response)) {
            return {
              pedidos: response,
              paginacion: {
                total: response.length,
                pagina: 1,
                limite: response.length,
                totalPaginas: 1,
                tieneSiguiente: false,
                tieneAnterior: false
              }
            };
          }
          // Si es un objeto con 'pedidos' y 'paginacion'
          if (response && response.pedidos && response.paginacion) {
            return {
              pedidos: response.pedidos,
              paginacion: response.paginacion
            };
          }
          // Si solo tiene 'pedidos' sin paginación
          if (response && response.pedidos) {
            return {
              pedidos: response.pedidos,
              paginacion: {
                total: response.pedidos.length,
                pagina: 1,
                limite: response.pedidos.length,
                totalPaginas: 1,
                tieneSiguiente: false,
                tieneAnterior: false
              }
            };
          }
          // Si no, devolvemos vacío
          return {
            pedidos: [],
            paginacion: {
              total: 0,
              pagina: 1,
              limite: 50,
              totalPaginas: 0,
              tieneSiguiente: false,
              tieneAnterior: false
            }
          };
        })
      );
  }
}
