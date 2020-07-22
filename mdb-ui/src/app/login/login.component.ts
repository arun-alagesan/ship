import { Component, OnInit, Input } from '@angular/core';
import { Router } from '@angular/router';
import { UsersService } from '../services/users.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  @Input() user = {
    email : 'someone@somewhere.com',
    passcode : 'arun@123',
    name : 'arun',
  }
  constructor( public router: Router, public userService: UsersService) { }

  ngOnInit(): void {
  }
   login(): void {
    //alert('hi before');
    this.userService.login(this.user.name, this.user.passcode, this.user.email)
      .subscribe( res =>{
        //alert (res);
        this.userService.Authenticated(res.data.authenticated);
        this.userService.name = res.data.user.name;
        if (res.data.authenticated ) {
          this.router.navigateByUrl('/home');
        }
      });
  }
}
