import { HttpClient, HttpParams } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class ProductoService {
  private apiURL = 'http://localhost:3000/api/productos';

  constructor(private http: HttpClient, 
  ) {}

  infoNutricional: any = null;

  getProductos(page?: number, limit?: number): Observable<any[]> {
    let params = new HttpParams();
    if (page) {
      params = params.set('page', page.toString());
    }
    if (limit) {
      params = params.set('limit', limit.toString());
    }
    
    return this.http.get<any>(this.apiURL, { params })
      .pipe(
        map((response: any) => {
          // Si la respuesta es un array (compatibilidad hacia atrás), lo devolvemos tal cual
          if (Array.isArray(response)) {
            return response;
          }
          // Si es un objeto con 'productos', extraemos el array
          if (response && response.productos) {
            return response.productos;
          }
          // Si no, devolvemos un array vacío
          return [];
        })
      );
  }

  crearProducto(data: any): Observable<any> {
    return this.http.post<any>(this.apiURL, data);
  }

  // Obtener un producto por ID
getProductoPorId(id: string): Observable<any> {
  return this.http.get<any>(`${this.apiURL}/${id}`);
}

// Actualizar producto
actualizarProducto(id: string, data: any): Observable<any> {
  return this.http.put<any>(`${this.apiURL}/${id}`, data);
}

// Eliminar producto
eliminarProducto(id: string): Observable<any> {
  return this.http.delete<any>(`${this.apiURL}/${id}`);
}

}

