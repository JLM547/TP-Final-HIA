import { RenderMode, ServerRoute } from '@angular/ssr';

export const serverRoutes: ServerRoute[] = [
  // Rutas que requieren datos del backend - usar Server rendering
  {
    path: 'home',
    renderMode: RenderMode.Server
  },
  {
    path: 'combos',
    renderMode: RenderMode.Server
  },
  {
    path: 'ofertas',
    renderMode: RenderMode.Server
  },
  // Rutas con parámetros dinámicos - usar Server rendering
  {
    path: 'admin/roles/edit/:id',
    renderMode: RenderMode.Server
  },
  {
    path: 'admin/users/edit/:id',
    renderMode: RenderMode.Server
  },
  {
    path: 'admin/products/edit/:id',
    renderMode: RenderMode.Server
  },
  {
    path: 'admin/combos/edit/:id',
    renderMode: RenderMode.Server
  },
  {
    path: 'admin/categories/edit/:id',
    renderMode: RenderMode.Server
  },
  {
    path: 'admin/ofertas/edit/:id',
    renderMode: RenderMode.Server
  },
  // Rutas protegidas que requieren autenticación - usar Server rendering
  {
    path: 'admin/**',
    renderMode: RenderMode.Server
  },
  {
    path: 'cliente/**',
    renderMode: RenderMode.Server
  },
  {
    path: 'repartidor/**',
    renderMode: RenderMode.Server
  },
  {
    path: 'cocina/**',
    renderMode: RenderMode.Server
  },
  // Rutas estáticas - prerender
  {
    path: 'login',
    renderMode: RenderMode.Prerender
  },
  {
    path: 'register',
    renderMode: RenderMode.Prerender
  },
  // Todas las demás rutas - prerender
  {
    path: '**',
    renderMode: RenderMode.Prerender
  }
];
