import { Component } from '@angular/core';
import projects from './../../../api/projects.json';

@Component({
  selector: 'app-project',
  templateUrl: './project.component.html',
  styleUrls: ['./project.component.css']
})
export class ProjectComponent {
  constructor(){}

  projects: any[] = projects
  projectSelected: Object = {}

  ngOnInit():void{
    
    function getProjecTypetUrl(){
      let pathname = window.location.pathname
      let projectsType = pathname.split('/')[2]
      return projectsType
    }

    this.projects.forEach(project => {
     
      if(project.url == getProjecTypetUrl()){
        this.projectSelected = project
        console.log(this.projectSelected)
        return
      }
    })
   
  }
  

}
