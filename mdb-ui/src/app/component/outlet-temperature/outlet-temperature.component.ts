import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-outlet-temperature',
  templateUrl: './outlet-temperature.component.html',
  styleUrls: ['./outlet-temperature.component.scss']
})
export class OutletTemperatureComponent implements OnInit {

  data: string;
  constructor() { }

  ngOnInit(): void {
  }

}
