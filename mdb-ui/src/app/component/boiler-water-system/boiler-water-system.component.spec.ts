import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { BoilerWaterSystemComponent } from './boiler-water-system.component';

describe('BoilerWaterSystemComponent', () => {
  let component: BoilerWaterSystemComponent;
  let fixture: ComponentFixture<BoilerWaterSystemComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ BoilerWaterSystemComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(BoilerWaterSystemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
