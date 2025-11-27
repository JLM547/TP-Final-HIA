import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http'; // Importar HttpHeaders
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { API_BASE_URL } from '../../core/constants/constants';
import { AuthService } from '../../core/auth/auth'; // Importar AuthService para obtener el token
import { ICliente } from '../../shared/interfaces';


const CLIENTE_API = API_BASE_URL + '/cliente'; // URL base para la API de clientes

@Injectable({
  providedIn: 'root'
})
export class ClienteService {

  constructor(private http: HttpClient, private authService: AuthService) { } // Inyectar AuthService

  private getAuthHeaders(): HttpHeaders {
    const token = this.authService.getToken();
    return new HttpHeaders({
      'Content-Type': 'application/json',
      'Authorization': token ? `Bearer ${token}` : ''
    });
  }

  /**
   * @description Obtiene la lista de todos los clientes.
   * Corresponde a GET /api/cliente
   * @param page Opcional. Número de página.
   * @param limit Opcional. Límite de resultados por página.
   * @returns Un Observable con un array de clientes.
   */
  getClientes(page?: number, limit?: number): Observable<ICliente[]> {
    let params = new HttpParams();
    if (page) {
      params = params.set('page', page.toString());
    }
    if (limit) {
      params = params.set('limit', limit.toString());
    }
    
    return this.http.get<any>(CLIENTE_API, { headers: this.getAuthHeaders(), params })
      .pipe(
        map((response: any) => {
          // Si la respuesta es un array (compatibilidad hacia atrás), lo devolvemos tal cual
          if (Array.isArray(response)) {
            return response;
          }
          // Si es un objeto con 'clientes', extraemos el array
          if (response && response.clientes) {
            return response.clientes;
          }
          // Si no, devolvemos un array vacío
          return [];
        })
      );
  }

  /**
   * @description Obtiene un cliente específico por su ID de perfil de cliente.
   * Corresponde a GET /api/cliente/:id
   * @param id El ID del cliente (del documento Cliente).
   * @returns Un Observable con los datos del cliente.
   */
  getClienteById(id: string): Observable<ICliente> {
    return this.http.get<ICliente>(`${CLIENTE_API}/${id}`, { headers: this.getAuthHeaders() });
  }


  /**
   * @description Crea un nuevo cliente.
   * Corresponde a POST /api/cliente
   * @param cliente Los datos del nuevo cliente (usuarioId, direccion, etc.).
   * @returns Un Observable con la respuesta del backend.
   */
  createCliente(cliente: { usuarioId: string, direccion: string, fechaNacimiento?: Date, preferenciasAlimentarias?: string[], puntos?: number }): Observable<any> {
    return this.http.post<any>(CLIENTE_API, cliente, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Actualiza un cliente existente.
   * Corresponde a PUT /api/cliente/:id
   * @param id El ID del cliente a actualizar.
   * @param cliente Los datos actualizados del cliente y usuario asociado.
   * @returns Un Observable con la respuesta del backend.
   */
  updateCliente(id: string, cliente: { 
    direccion?: string, 
    fechaNacimiento?: Date, 
    preferenciasAlimentarias?: string[], 
    puntos?: number,
    username?: string,
    email?: string,
    telefono?: string,
    nombre?: string,
    apellido?: string
  }): Observable<any> {
    return this.http.put<any>(`${CLIENTE_API}/${id}`, cliente, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Elimina un cliente por su ID.
   * Corresponde a DELETE /api/cliente/:id
   * @param id El ID del cliente a eliminar.
   * @returns Un Observable con la respuesta del backend.
   */
  deleteCliente(id: string): Observable<any> {
    return this.http.delete<any>(`${CLIENTE_API}/${id}`, { headers: this.getAuthHeaders() });
  }

  /**
   * @description Obtiene un perfil de cliente por el ID del usuario asociado.
   * Corresponde a GET /api/cliente/by-usuario/:usuarioId
   * @param usuarioId El ID del usuario (del documento Usuario) asociado al cliente.
   * @returns Un Observable con los datos del cliente.
   */
  getClienteByUsuarioId(usuarioId: string): Observable<ICliente> {
    return this.http.get<ICliente>(`${CLIENTE_API}/by-usuario/${usuarioId}`, { headers: this.getAuthHeaders() });
  }

  /**
   * Cambia la contraseña del usuario asociado a un cliente.
   * @param clienteId El ID del cliente
   * @param payload { currentPassword, newPassword, confirmPassword }
   */
  cambiarPassword(clienteId: string, payload: { currentPassword: string, newPassword: string, confirmPassword: string }): Observable<any> {
    return this.http.post<any>(`${CLIENTE_API}/${clienteId}/cambiar-password`, payload, { headers: this.getAuthHeaders() });
  }
}
