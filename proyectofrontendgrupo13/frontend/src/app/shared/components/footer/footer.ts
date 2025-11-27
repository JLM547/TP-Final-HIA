import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-footer',
  standalone: true,
  imports: [CommonModule, RouterLink],
  templateUrl: './footer.html',
  styleUrl: './footer.css'
})
export class Footer {
  currentYear = new Date().getFullYear();
  
  // Integrantes del Grupo 13
  integrantes = [
    'FLORES, Jonatan Uziel',
    'MORALES, Jeremias Leonel',
    'MORALES, Malena',
    'GUTIERREZ, Sergio Leonardo',
    'BARBOZA, Gonzalo'
  ];
}
