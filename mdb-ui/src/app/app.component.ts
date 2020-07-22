import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'mdb-ui';
  showSideNav = false;
  showMenu = false;
  displayMenu = () => {
    this.showMenu = true;
    console.log('display menu');
  }
  displaySideMenu = () => {
    this.showSideNav = true;
    console.log('display side menu');
  }
}
