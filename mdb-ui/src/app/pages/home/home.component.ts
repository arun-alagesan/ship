import { Component, OnInit } from '@angular/core';
import { NaviagationService } from 'src/app/services/naviagation.service';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  constructor(private navService: NaviagationService) { }

  ngOnInit(): void {
    this.navService.EnableNavigation = false;
  }

}
