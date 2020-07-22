import { Injectable } from '@angular/core';
import { BehaviorSubject } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class NaviagationService {
  private navigationEnabled = new BehaviorSubject(false);
  get isNavigationEnabled() {
     return this.navigationEnabled.asObservable();
  }
  set EnableNavigation(value: boolean) {
    //alert(`navigation enabled : ${value}`);
    this.navigationEnabled.next(value);
  }
  constructor() {

  }
}
