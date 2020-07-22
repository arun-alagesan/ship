import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { Observable, BehaviorSubject } from 'rxjs';
import { Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class UsersService {
  serviceApi = environment.service_api + 'users';
  headers = new HttpHeaders().set('ContentType', 'application/json' );
  private authenticated = new BehaviorSubject<boolean>(false);
  name = '';
  constructor( private http: HttpClient) { }

  get isAuthenticated(){
    return this.authenticated.asObservable();
  }

  Authenticated(value: boolean) {
    alert(`user service Authenticated : ${value}`);
    this.authenticated.next(value);
  }
  login(userName: string, userPassword: string, userEmail: string): Observable<any>  {
    let user = {
      username: userName,
      password : userPassword,
      email : userEmail
    };
    return this.http.post(this.serviceApi + '/login', user, {headers: this.headers});
  }

  logout() {
    this.authenticated.next(false);
  }
}
