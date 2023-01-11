import { Component, Input } from '@angular/core';
import menu from './../api/projects.json';
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  //definicion de propiedades
  
  title = 'Henry';
  
  menuProjects = menu
}
