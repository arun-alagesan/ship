import { Component, OnInit } from '@angular/core';
import {AppComponent} from '../app.component';
import { NaviagationService } from '../services/naviagation.service';

@Component({
  selector: 'app-side-nav',
  templateUrl: './side-nav.component.html',
  styleUrls: ['./side-nav.component.scss']
})
export class SideNavComponent implements OnInit {


  constructor(public app: AppComponent, public nav: NaviagationService) { }

  ngOnInit(): void {
    
  }

}
