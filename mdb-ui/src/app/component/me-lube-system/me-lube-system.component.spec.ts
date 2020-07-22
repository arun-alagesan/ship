import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MeLubeSystemComponent } from './me-lube-system.component';

describe('MeLubeSystemComponent', () => {
  let component: MeLubeSystemComponent;
  let fixture: ComponentFixture<MeLubeSystemComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MeLubeSystemComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MeLubeSystemComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
