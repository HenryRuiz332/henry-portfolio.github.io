import { Component } from '@angular/core';
import projects from './../../api/projects.json';

@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.css']
})
export class ProjectsComponent {
  constructor (){
    
  }

  projects : any [] = []

  ngOnInit(): void {
    this.projects = projects
    console.log(this.projects)
    
  }

  showDetailsProject(){
    alert("SHow project")
  }
}
