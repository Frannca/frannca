import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { AppRoutingModule } from './app-routing.module';
import { ClientsComponent } from './clients/clients.component';
import { PortfolioComponent } from './portfolio/portfolio.component';
import { AboutComponent } from './about/about.component';


@NgModule({
    declarations: [
        AppComponent,
        HomeComponent,
        ClientsComponent,
        PortfolioComponent,
        AboutComponent
    ],
    imports: [
        AppRoutingModule,
        BrowserModule.withServerTransition({appId: 'frannca'})
    ],
    providers: [],
    bootstrap: [AppComponent]
})
export class AppModule { }
