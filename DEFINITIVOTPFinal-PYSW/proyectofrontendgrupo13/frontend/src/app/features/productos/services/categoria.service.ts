import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { API_BASE_URL } from '../../../core/constants/constants';

@Injectable({
  providedIn: 'root'
})
export class CategoriaService {
  private apiURL = `${API_BASE_URL}/categorias`;

  constructor(private http: HttpClient) {}

  getCategorias(): Observable<any[]> {
    return this.http.get<any[]>(this.apiURL);
  }

  getCategoriaPorId(id: string): Observable<any> {
    return this.http.get<any>(`${this.apiURL}/${id}`);
  }

  crearCategoria(data: any): Observable<any> {
    return this.http.post<any>(this.apiURL, data);
  }

  actualizarCategoria(id: string, data: any): Observable<any> {
    return this.http.put<any>(`${this.apiURL}/${id}`, data);
  }

  eliminarCategoria(id: string): Observable<any> {
    return this.http.delete<any>(`${this.apiURL}/${id}`);
  }
}
