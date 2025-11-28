// proyecto/frontend/src/app/data/services/usuario.service.ts
import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { API_BASE_URL } from '../../core/constants/constants';
import { AuthService } from '../../core/auth/auth';

// --- ¡IMPORTACIÓN CORRECTA Y ÚNICA DE INTERFACES! ---
import { IRol, IClientePerfil, IRepartidor, IUsuario } from '../../shared/interfaces';
// --- FIN DE IMPORTACIÓN ---

const USUARIO_API = API_BASE_URL + '/usuario';
const ROLES_API = API_BASE_URL + '/rol';

@Injectable({
  providedIn: 'root'
})
export class UsuarioService {

  constructor(
    private http: HttpClient,
    private authService: AuthService
  ) { }

  private getAuthHeaders(): HttpHeaders {
    const token = this.authService.getToken();
    let headers = new HttpHeaders();
    if (token) {
      headers = headers.set('Authorization', `Bearer ${token}`);
    }
    return headers;
  }

  getUsuarios(page?: number, limit?: number): Observable<IUsuario[]> {
    let params = new HttpParams();
    if (page) {
      params = params.set('page', page.toString());
    }
    if (limit) {
      params = params.set('limit', limit.toString());
    }
    
    return this.http.get<any>(USUARIO_API, { headers: this.getAuthHeaders(), params })
      .pipe(
        map((response: any) => {
          // Si la respuesta es un array (compatibilidad hacia atrás), lo devolvemos tal cual
          if (Array.isArray(response)) {
            return response;
          }
          // Si es un objeto con 'usuarios', extraemos el array
          if (response && response.usuarios) {
            return response.usuarios;
          }
          // Si no, devolvemos un array vacío
          return [];
        })
      );
  }

  getUsuarioById(id: string): Observable<IUsuario> {
    return this.http.get<IUsuario>(`${USUARIO_API}/${id}`, { headers: this.getAuthHeaders() });
  }

  updateUsuario(id: string, userData: any): Observable<any> {
    return this.http.put<any>(`${USUARIO_API}/${id}`, userData, { headers: this.getAuthHeaders() });
  }

  deleteUsuario(id: string): Observable<any> {
    return this.http.delete<any>(`${USUARIO_API}/${id}`, { headers: this.getAuthHeaders() });
  }

  getUsuariosByRoleId(roleId: string, page?: number, limit?: number): Observable<IUsuario[]> {
    let params = new HttpParams().set('rolId', roleId);
    if (page) {
      params = params.set('page', page.toString());
    }
    if (limit) {
      params = params.set('limit', limit.toString());
    }
    
    return this.http.get<any>(USUARIO_API, { headers: this.getAuthHeaders(), params })
      .pipe(
        map((response: any) => {
          // Si la respuesta es un array (compatibilidad hacia atrás), lo devolvemos tal cual
          if (Array.isArray(response)) {
            return response;
          }
          // Si es un objeto con 'usuarios', extraemos el array
          if (response && response.usuarios) {
            return response.usuarios;
          }
          // Si no, devolvemos un array vacío
          return [];
        })
      );
  }

  getRoles(): Observable<IRol[]> {
    return this.http.get<IRol[]>(ROLES_API, { headers: this.getAuthHeaders() });
  }

  getRolById(id: string): Observable<IRol> {
    return this.http.get<IRol>(`${ROLES_API}/${id}`, { headers: this.getAuthHeaders() });
  }

  updateRol(id: string, roleData: Partial<IRol>): Observable<any> {
    return this.http.put<any>(`${ROLES_API}/${id}`, roleData, { headers: this.getAuthHeaders() });
  }

  deleteRol(id: string): Observable<any> {
    return this.http.delete<any>(`${ROLES_API}/${id}`, { headers: this.getAuthHeaders() });
  }
}