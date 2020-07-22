import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VesselLogComponent } from './vessel-log.component';

describe('VesselLogComponent', () => {
  let component: VesselLogComponent;
  let fixture: ComponentFixture<VesselLogComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VesselLogComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VesselLogComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
