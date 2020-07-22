import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { TestComponent } from './pages/test/test.component';
import { LoginComponent } from './login/login.component';
import { ReportsComponent } from './pages/reports/reports.component';
import { HeaderComponent } from './pages/reports/header/header.component';
import { OperationsComponent } from './pages/reports/operations/operations.component';
import { HomeComponent } from './pages/home/home.component';
import { EngineComponent } from './pages/reports/engine/engine.component';
import { DeckComponent } from './pages/reports/deck/deck.component';
import { SettingsComponent } from './pages/settings/settings.component';
import { VesselLogComponent } from './pages/vessel-log/vessel-log.component';


const routes: Routes = [
  {path: 'home', component: HomeComponent},
  {path: 'test', component: TestComponent},
  {path: 'vessellog', component: VesselLogComponent},
  {path: 'settings', component: SettingsComponent},
  {path: 'login', component: LoginComponent},
  {path: 'reports', component: ReportsComponent},
  {path: 'create', component: HeaderComponent },
  {path: 'reports/header', component: HeaderComponent },
  {path: 'reports/operations', component: OperationsComponent },
  {path: 'reports/engine', component: EngineComponent,
      children: [
        {path: 'mainengine', component: HeaderComponent},
        {path: 'auxillary', component: OperationsComponent},
        {path: 'switchboard', component: HeaderComponent},
        {path: 'boilers', component: OperationsComponent},
        {path: 'systems', component: HeaderComponent},
        {path: 'runhours', component: OperationsComponent},
        {path: 'consumption', component: HeaderComponent},
        {path: 'bunker', component: HeaderComponent},
        {path: 'stock', component: OperationsComponent},
        {path: 'tank', component: HeaderComponent},
        {path: 'performance', component: OperationsComponent},
        {path: 'workdone', component: HeaderComponent},
  ]},
  {path: 'reports/deck', component: DeckComponent, 
    children: [
      {path: 'Observations', component: HeaderComponent},
      {path: 'cargo', component: OperationsComponent},
      {path: 'systems', component: HeaderComponent},
      {path: 'stoppages', component: OperationsComponent},
      {path: 'workdone', component: HeaderComponent},
  ]},

  {path: '**', redirectTo: 'login'}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
