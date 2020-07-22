import { Component, OnInit } from '@angular/core';
import { ReportsService } from '../../services/reports.service';
import { NaviagationService } from 'src/app/services/naviagation.service';



@Component({
  selector: 'app-reports',
  templateUrl: './reports.component.html',
  styleUrls: ['./reports.component.scss']
})
export class ReportsComponent implements OnInit {
  constructor(private service: ReportsService, private navService: NaviagationService) { }
  elements: any = [];
  /* [
    {id: 1, first: 'Mark', last: 'Otto', handle: '@mdo'},
    {id: 2, first: 'Jacob', last: 'Thornton', handle: '@fat'},
    {id: 3, first: 'Larry', last: 'the Bird', handle: '@twitter'},
  ]; */

  headElements = ['Report#', 'Type', 'Created', 'Created By', 'Status', 'Action'];
  ngOnInit(): void {
    this.navService.EnableNavigation = false;
    this.loadReports();
  }
  loadReports(): void {
    this.service.getReports().subscribe(response => this.elements = response.data);
    console.log(this.elements);
  }
}
