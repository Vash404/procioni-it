import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class MediaService {
  constructor(private http: HttpClient) {}

  getMediaList(): Observable<string[]> {
    // Percorso corretto al file JSON
    return this.http.get<string[]>('assets/photos/media_array.json');
  }
}
