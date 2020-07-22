import { Injectable } from '@angular/core';
import {environment} from '../../environments/environment';
import { HttpResponse, HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ReportsService {

  serviceApi = environment.service_api + 'reports';
  headers = new HttpHeaders().set('ContentType', 'application/json' );

  constructor(private http: HttpClient) { }

   getReports = (): Observable<any> => {
    /* let rep =  this.http.get(this.serviceApi, { headers: this.headers });
    rep.subscribe((respone: any) => {
      console.log(respone);
      if (respone.status === 'success') {
        return respone.data;
      }
      else {
        return (respone);
      }
    },
    (error) => {
      console.log(error);
      return (error);
      });
    } */
    /* const req =  await this.http.get(this.serviceApi, { headers: this.headers });
    console.log(req);
    let records;
    req.subscribe((response: any ) => {
      records =  response.data;
      console.log(records);
    });
    return records; */

    return this.http.get(this.serviceApi, { headers: this.headers });
  }
}
