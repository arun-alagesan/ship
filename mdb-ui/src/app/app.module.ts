import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MDBBootstrapModule } from 'angular-bootstrap-md';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NavComponent } from './nav/nav.component';
import { LoginComponent } from './login/login.component';
import { FooterComponent } from './footer/footer.component';
import { SideNavComponent } from './side-nav/side-nav.component';
import { MainComponent } from './main/main.component';
import { TestComponent } from './pages/test/test.component';
import { BoilersComponent } from './component/boilers/boilers.component';
import { TurboChargerComponent } from './component/turbo-charger/turbo-charger.component';
import { OutletTemperatureComponent } from './component/outlet-temperature/outlet-temperature.component';
import { MeLubeSystemComponent } from './component/me-lube-system/me-lube-system.component';
import { BoilerWaterSystemComponent } from './component/boiler-water-system/boiler-water-system.component';
import { ReportsComponent } from './pages/reports/reports.component';
import { ReportsService } from './services/reports.service';
import { HttpClientModule } from '@angular/common/http';
import { NaviagationService } from './services/naviagation.service';
import { UsersService } from './services/users.service';
import { FormsModule } from '@angular/forms';
import { HeaderComponent } from './pages/reports/header/header.component';
import { ReportDetailComponent } from './component/report-detail/report-detail.component';
import { VesselDetailComponent } from './component/vessel-detail/vessel-detail.component';
import { OperationsComponent } from './pages/reports/operations/operations.component';
import { HomeComponent } from './pages/home/home.component';
import { EngineComponent } from './pages/reports/engine/engine.component';
import { DeckComponent } from './pages/reports/deck/deck.component';
import { SettingsComponent } from './pages/settings/settings.component';
import { VesselLogComponent } from './pages/vessel-log/vessel-log.component';




@NgModule({
  declarations: [
    AppComponent,
    NavComponent,
    LoginComponent,
    FooterComponent,
    SideNavComponent,
    MainComponent,
    TestComponent,
    BoilersComponent,
    TurboChargerComponent,
    OutletTemperatureComponent,
    MeLubeSystemComponent,
    BoilerWaterSystemComponent,
    ReportsComponent,
    HeaderComponent,
    ReportDetailComponent,
    VesselDetailComponent,
    OperationsComponent,
    HomeComponent,
    EngineComponent,
    DeckComponent,
    SettingsComponent,
    VesselLogComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    AppRoutingModule,
    MDBBootstrapModule.forRoot(),
    HttpClientModule
  ],
  providers: [
    ReportsService,
    NaviagationService,
    UsersService,
    NavComponent
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
