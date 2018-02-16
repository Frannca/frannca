import { Component, AfterContentInit } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
declare var jQuery: any;

@Component({
  selector: 'app-technologies',
  templateUrl: './technologies.component.html',
  styleUrls: ['./technologies.component.css']
})
export class TechnologiesComponent implements AfterContentInit {

    constructor(
        meta: Meta,
        title: Title
    ) {
        title.setTitle('Technologies - Frannca');

        meta.updateTag({ name: 'description', content: 'Technologies used by Frannca.' });
    }

    ngAfterContentInit() {
        setTimeout(() => {
            const header = jQuery('#technologies').position();
            jQuery('body').animate({ scrollTop: header.top + 10 }, 1000);
        }, 500);
    }

}
