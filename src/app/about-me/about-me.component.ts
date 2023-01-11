import { Component } from '@angular/core';
import skillsjson from './../../api/skills.json';

@Component({
  selector: 'app-about-me',
  templateUrl: './about-me.component.html',
  styleUrls: ['./about-me.component.css']
})
export class AboutMeComponent {
  php: Number = 70
  interval ={}
  value = 0

  skills = skillsjson

  ngOnInit(){
    window.addEventListener ('scroll', this.progressBarStartOnScroll); 
    console.log(this.php)


  }

  progressBarStartOnScroll () {
    
    const that = this;
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    scrollTop = scrollTop; 
   
    if (scrollTop > 500) {
      
      
      for(let y=0; y<skillsjson.length; y++){
          skillsjson[y].interval = setInterval(() => {
          if (skillsjson[y].value === skillsjson[y].limit) {
             return skillsjson[y].value = skillsjson[y].limit

          }
          if(skillsjson[y].value < skillsjson[y].limit){
             skillsjson[y].value += 10
          }
         
        }, 500)
      }
        

    } 

    if (scrollTop > 1200) {
       this.setInterval()
    } 
    if (scrollTop < 200) {
       //this.setInterval()
    }
  }
  setInterval(){
    for(let y=0; y<skillsjson.length; y++){
      skillsjson[y].value = 0
      skillsjson[y].interval = {}
    }
  }

}
