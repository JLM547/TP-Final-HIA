// src/app/data/services/repartidor.service.ts
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, of } from 'rxjs';
import { map } from 'rxjs/operators'; // Asegúrate de importar 'map'
import { API_BASE_URL } from '../../core/constants/constants';
import { AuthService } from '../../core/auth/auth';

import { IRepartidor, IHistorialEntrega } from '../../shared/interfaces';

const REPARTIDOR_API = API_BASE_URL + '/repartidores';

@Injectable({
  providedIn: 'root'
})
export class RepartidorService {

  constructor(
    private http: HttpClient,
    private authService: AuthService
  ) { }

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
   * Obtiene el perfil de un repartidor por su ID de usuario.
   * El backend ahora retorna { repartidores: [...], paginacion: {...} }
   * Toma el primer elemento del array de repartidores.
   * Si el array está vacío, devuelve null.
   * @param userId El ID del usuario asociado al perfil de repartidor.
   * @returns Observable de IRepartidor (el primer elemento del array) o null.
   */
  getRepartidorByUserId(userId: string): Observable<IRepartidor | null> {
    return this.http.get<any>(`${REPARTIDOR_API}?usuarioId=${userId}`, { headers: this.getAuthHeaders() })
      .pipe(
        map(response => {
          // Si la respuesta es un array (compatibilidad hacia atrás), lo devolvemos tal cual
          let repartidores: IRepartidor[] = [];
          
          if (Array.isArray(response)) {
            repartidores = response;
          } else if (response && response.repartidores) {
            // Si es un objeto con 'repartidores', extraemos el array
            repartidores = response.repartidores;
          }
          
          // Si el array tiene al menos un elemento, toma el primero.
          // De lo contrario, devuelve null.
          if (repartidores && repartidores.length > 0) {
            return repartidores[0];
          }
          return null;
        })
      );
  }

  /**
   * Cambia el estado operacional de un repartidor.
   * @param repartidorId El ID del perfil de repartidor.
   * @param estado El nuevo estado ('disponible', 'en_entrega', 'fuera_de_servicio').
   * @returns Observable de la respuesta del backend.
   */
  cambiarEstadoRepartidor(repartidorId: string, estado: string): Observable<any> {
    return this.http.patch<any>(`${REPARTIDOR_API}/${repartidorId}/estado`, { estado }, { headers: this.getAuthHeaders() });
  }

  /**
   * Actualiza la ubicación actual de un repartidor.
   * @param repartidorId El ID del perfil de repartidor.
   * @param lat La latitud.
   * @param lon La longitud.
   * @returns Observable de la respuesta del backend.
   */
  updateUbicacion(repartidorId: string, lat: number, lon: number): Observable<any> {
    return this.http.put<any>(`${REPARTIDOR_API}/${repartidorId}/ubicacion`, { lat, lon }, { headers: this.getAuthHeaders() });
  }

  /**
   * Registra una nueva entrega en el historial del repartidor.
   * @param repartidorId El ID del perfil de repartidor.
   * @param entregaData Los datos de la entrega (pedidoId, fechaEntrega, calificacionCliente).
   * @returns Observable de la respuesta del backend.
   */
  registrarEntregaRepartidor(repartidorId: string, entregaData: Partial<IHistorialEntrega>): Observable<any> {
    return this.http.patch<any>(`${REPARTIDOR_API}/${repartidorId}/registrar-entrega`, entregaData, { headers: this.getAuthHeaders() });
  }

  /**
   * Actualiza el perfil completo del repartidor (datos del usuario y repartidor).
   * @param repartidorId El ID del perfil de repartidor.
   * @param updateData Los datos actualizados del repartidor y usuario asociado.
   * @returns Observable de la respuesta del backend.
   */
  updateRepartidor(repartidorId: string, updateData: {
    vehiculo?: string;
    numeroLicencia?: string;
    estado?: string;
    username?: string;
    email?: string;
    telefono?: string;
    nombre?: string;
    apellido?: string;
  }): Observable<any> {
    return this.http.put<any>(`${REPARTIDOR_API}/${repartidorId}/profile`, updateData, { headers: this.getAuthHeaders() });
  }

  // Si en el futuro quieres usar el endpoint por ID de repartidor:
  // getRepartidorById(repartidorId: string): Observable<IRepartidor> {
  //   return this.http.get<IRepartidor>(${REPARTIDOR_API}/${repartidorId}, { headers: this.getAuthHeaders() });
  // }
}