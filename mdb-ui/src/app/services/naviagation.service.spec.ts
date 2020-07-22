import { TestBed } from '@angular/core/testing';

import { NaviagationService } from './naviagation.service';

describe('NaviagationService', () => {
  let service: NaviagationService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(NaviagationService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
