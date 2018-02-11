import { Component, OnInit } from '@angular/core';
declare var jQuery: any;

@Component({
    selector: 'app-home',
    templateUrl: './home.component.html',
    styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

    constructor() { }

    ngOnInit() {
        jQuery('body').animate({ scrollTop: 0 }, 1000);
    }

}
