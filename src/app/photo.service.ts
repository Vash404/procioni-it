import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class PhotoService {
  private baseUrl = '/assets/photos/'; // Percorso statico delle immagini
  private photoList: string[] = []; // Lista delle immagini

  constructor() {
    // Genera una lista di immagini statiche (nomi sequenziali o definiti manualmente)
    for (let i = 1; i <= 100; i++) {
      this.photoList.push(`${this.baseUrl}photo-${i}.jpg`);
    }
  }

  getPhotos(page: number, limit: number): string[] {
    const start = (page - 1) * limit;
    const end = start + limit;
    return this.photoList.slice(start, end);
  }
}
