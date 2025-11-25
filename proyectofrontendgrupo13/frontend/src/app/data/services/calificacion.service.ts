// src/app/data/services/calificacion.service.ts
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { API_BASE_URL } from '../../core/constants/constants';
import { AuthService } from '../../core/auth/auth';
import { ICalificacion } from '../../shared/interfaces'; // Asegúrate de que esta interfaz exista

const CALIFICACION_API = API_BASE_URL + '/calificaciones'; // Endpoint para calificaciones

@Injectable({
    providedIn: 'root'
})
export class CalificacionService {

    constructor(
        private http: HttpClient,
        private authService: AuthService
    ) { }

    /**
     * Genera los encabezados HTTP con el token de autenticación.
     * @returns HttpHeaders con el token JWT.
     */
    private getAuthHeaders(): HttpHeaders {
        const token = this.authService.getToken();
        let headers = new HttpHeaders({
            'Content-Type': 'application/json'
        });
        if (token) {
            headers = headers.set('Authorization', `Bearer ${token}`);
        }
        return headers;
    }

    /**
     * Obtiene todas las calificaciones (puede ser filtrado por el backend por cliente/admin).
     * @param page Opcional. Número de página (por defecto 1).
     * @param limit Opcional. Límite de resultados por página (por defecto 50).
     * @returns Observable de un array de ICalificacion.
     */
    getCalificaciones(page?: number, limit?: number): Observable<ICalificacion[]> {
        let params = new HttpParams();
        if (page) {
            params = params.set('page', page.toString());
        }
        if (limit) {
            params = params.set('limit', limit.toString());
        }
        
        // El backend ahora retorna { calificaciones: ICalificacion[], paginacion: {...} }
        // Extraemos solo el array de calificaciones para mantener compatibilidad
        return this.http.get<any>(CALIFICACION_API, { headers: this.getAuthHeaders(), params })
            .pipe(
                map((response: any) => {
                    // Si la respuesta es un array (compatibilidad hacia atrás), lo devolvemos tal cual
                    if (Array.isArray(response)) {
                        return response;
                    }
                    // Si es un objeto con 'calificaciones', extraemos el array
                    if (response && response.calificaciones) {
                        return response.calificaciones;
                    }
                    // Si no, devolvemos un array vacío
                    return [];
                })
            );
    }

    /**
     * Obtiene una calificación por su ID.
     * @param id El ID de la calificación.
     * @returns Observable de ICalificacion.
     */
    getCalificacionById(id: string): Observable<ICalificacion> {
        return this.http.get<ICalificacion>(`${CALIFICACION_API}/${id}`, { headers: this.getAuthHeaders() });
    }

    /**
     * Crea una nueva calificación.
     * @param calificacion Los datos de la nueva calificación.
     * @returns Observable de la respuesta del backend.
     */
    createCalificacion(calificacion: Partial<ICalificacion>): Observable<any> {
        return this.http.post<any>(CALIFICACION_API, calificacion, { headers: this.getAuthHeaders() });
    }

    /**
     * Actualiza una calificación existente.
     * @param id El ID de la calificación a actualizar.
     * @param calificacion Los datos actualizados de la calificación.
     * @returns Observable de la respuesta del backend.
     */
    updateCalificacion(id: string, calificacion: Partial<ICalificacion>): Observable<any> {
        return this.http.put<any>(`${CALIFICACION_API}/${id}`, calificacion, { headers: this.getAuthHeaders() });
    }

    /**
     * Elimina una calificación por su ID.
     * @param id El ID de la calificación a eliminar.
     * @returns Observable de la respuesta del backend.
     */
    deleteCalificacion(id: string): Observable<any> {
        return this.http.delete<any>(`${CALIFICACION_API}/${id}`, { headers: this.getAuthHeaders() });
    }

    /**
     * Obtiene calificaciones por ID de cliente.
     * @param clienteId El ID del cliente.
     * @param page Opcional. Número de página.
     * @param limit Opcional. Límite de resultados por página.
     * @returns Observable de un array de ICalificacion.
     */
    getCalificacionesByClienteId(clienteId: string, page?: number, limit?: number): Observable<ICalificacion[]> {
        let params = new HttpParams();
        if (page) {
            params = params.set('page', page.toString());
        }
        if (limit) {
            params = params.set('limit', limit.toString());
        }
        
        return this.http.get<any>(`${CALIFICACION_API}/cliente/${clienteId}`, { headers: this.getAuthHeaders(), params })
            .pipe(
                map((response: any) => {
                    if (Array.isArray(response)) {
                        return response;
                    }
                    if (response && response.calificaciones) {
                        return response.calificaciones;
                    }
                    return [];
                })
            );
    }

    /**
     * Obtiene las calificaciones de entrega para un repartidor específico.
     * @param repartidorId El ID del repartidor.
     * @returns Observable con las calificaciones del repartidor.
     */
    getCalificacionesByRepartidorId(repartidorId: string): Observable<any> {
        return this.http.get<any>(`${CALIFICACION_API}/repartidor/${repartidorId}`, { headers: this.getAuthHeaders() });
    }
}
