import { Component, AfterContentInit } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
declare var jQuery: any;

@Component({
    selector: 'app-portfolio',
    templateUrl: './portfolio.component.html',
})
export class PortfolioComponent implements AfterContentInit {

    constructor(
        meta: Meta,
        title: Title
    ) {
        title.setTitle('Portfolio - Frannca');

        meta.updateTag({ name: 'description', content: 'Get to know the projects developed by Frannca.' });
    }

    ngAfterContentInit() {
        setTimeout(() => {
            const header = jQuery('#portfolio').position();
            jQuery('body').animate({ scrollTop: header.top + 10 }, 1000);
        }, 500);
    }

}
