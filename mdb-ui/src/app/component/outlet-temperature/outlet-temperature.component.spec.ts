import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { OutletTemperatureComponent } from './outlet-temperature.component';

describe('OutletTemperatureComponent', () => {
  let component: OutletTemperatureComponent;
  let fixture: ComponentFixture<OutletTemperatureComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ OutletTemperatureComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(OutletTemperatureComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
