import { Component, OnInit } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
declare var jQuery: any;

@Component({
    selector: 'app-home',
    templateUrl: './home.component.html',
    styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

    constructor(
        meta: Meta,
        title: Title
    ) {
        title.setTitle('Frannca');

        meta.updateTag({ name: 'description', content: 'Solutions for your business.' });
    }

    ngOnInit() {
        jQuery('body').animate({ scrollTop: 0 }, 1000);
    }

}
