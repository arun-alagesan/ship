import { Component, OnInit, Input } from '@angular/core';
import {NaviagationService} from '../services/naviagation.service';
import {UsersService} from '../services/users.service';
import { Observable } from 'rxjs';

@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.scss']
})
export class NavComponent implements OnInit {

  isLoggedIn = new Observable<boolean>() ;
  show: boolean;
  constructor(public user: UsersService) { }

  ngOnInit(): void {
      this.isLoggedIn = this.user.isAuthenticated;
  }

}
