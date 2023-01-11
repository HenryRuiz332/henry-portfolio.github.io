import { Component, Input } from '@angular/core';



@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html'
})
export class Nabvar {
  //Para comunicar variables de componente padre a hijo
  @Input() appTitle : String;

  @Input() menuProjects : any[] = [];
  
}