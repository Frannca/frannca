import { Component, AfterContentInit } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
declare var jQuery: any;

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html',
})
export class AboutComponent implements AfterContentInit {

    constructor(
        meta: Meta,
        title: Title
    ) {
        title.setTitle('About - Frannca');

        meta.updateTag({ name: 'description', content: 'About' });
    }

    ngAfterContentInit() {
        setTimeout(() => {
            const header = jQuery('#about').position();
            jQuery('body').animate({ scrollTop: header.top + 10 }, 1000);
        }, 500);
    }

}
