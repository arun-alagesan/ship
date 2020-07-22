import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NaviagationService } from 'src/app/services/naviagation.service';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.scss']
})
export class HeaderComponent implements OnInit {

  constructor(private router: Router, public navService: NaviagationService) { }

  ngOnInit(): void {
    this.navService.EnableNavigation = true;
  }
  save(){
    this.router.navigateByUrl('reports/operations');
  }
}
