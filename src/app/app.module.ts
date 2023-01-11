import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { Nabvar } from './structure/navbar.component';
import { Footer } from './structure/footer.component';

import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AboutMeComponent } from './about-me/about-me.component';
import { ProjectsComponent } from './projects/projects.component';
import { ContactComponent } from './contact/contact.component';
import { FormsModule } from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';
import { ServicesComponent } from './services/services.component';
import { Error404Component } from './error404/error404.component';
import { ProjectComponent } from './projects/project/project.component';

const appRoutes : Routes = [
  
  {
    path :'', component : HomeComponent
  },
  {
    path :'about-me', component : AboutMeComponent
  },
  {
    path :'projects', component : ProjectsComponent
  },
  {
    path :'projects/:name', component : ProjectComponent
  },
  {
    path :'services', component : ServicesComponent
  },
  {
    path :'contact', component : ContactComponent
  },
  {
    path :'**', component : Error404Component
  }
]

@NgModule({
  declarations: [
    Error404Component,
    Nabvar,
    Footer,
    AppComponent,
    HomeComponent,
    AboutMeComponent,
    ProjectsComponent,
    ContactComponent,
    ServicesComponent,
    ProjectComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    RouterModule.forRoot(appRoutes),
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
