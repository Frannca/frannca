import { Component, AfterContentInit } from '@angular/core';
declare var jQuery: any;

@Component({
    selector: 'app-portfolio',
    templateUrl: './portfolio.component.html',
    styleUrls: ['./portfolio.component.css']
})
export class PortfolioComponent implements AfterContentInit {

    constructor() { }

    ngAfterContentInit() {
        setTimeout(() => {
            const header = jQuery('#portfolio').position();
            console.log(header.top);
            jQuery('body').animate({ scrollTop: header.top + 10 }, 1000);
        }, 500);
    }

}
