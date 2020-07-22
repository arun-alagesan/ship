import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TurboChargerComponent } from './turbo-charger.component';

describe('TurboChargerComponent', () => {
  let component: TurboChargerComponent;
  let fixture: ComponentFixture<TurboChargerComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TurboChargerComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TurboChargerComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
