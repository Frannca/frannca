import { AfterContentInit, Component } from '@angular/core';
declare var jQuery: any;

@Component({
  selector: 'app-clients',
  templateUrl: './clients.component.html',
  styleUrls: ['./clients.component.css']
})
export class ClientsComponent implements AfterContentInit {

    constructor() { }

    ngAfterContentInit() {
        setTimeout(() => {
            const header = jQuery('#clients').position();
            console.log(header.top);
            jQuery('body').animate({ scrollTop: header.top + 10 }, 1000);
        }, 500);
    }

}
