import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-boiler-water-system',
  templateUrl: './boiler-water-system.component.html',
  styleUrls: ['./boiler-water-system.component.scss']
})
export class BoilerWaterSystemComponent implements OnInit {

   boilerWaterSystem : {

    typeOfOperation:string,

  }
  constructor() { }

  ngOnInit(): void {

  }

}
