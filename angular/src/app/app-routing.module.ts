import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { FurnitureComponent } from './furniture/furniture.component';


const routes: Routes = [
  {path:"", component:HomeComponent},
  {path:"furniture", component:FurnitureComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
