import { Component } from '@angular/core';
import services from './../../api/services.json';

@Component({
  selector: 'app-services',
  templateUrl: './services.component.html',
  styleUrls: ['./services.component.css']
})
export class ServicesComponent {
  services : any [] = []
  ngOnInit(): void {
    this.services = services
    console.log(this.services)
    
  }
}
