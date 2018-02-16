import { AfterContentInit, Component } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';
declare var jQuery: any;

@Component({
  selector: 'app-clients',
  templateUrl: './clients.component.html',
  styleUrls: ['./clients.component.css']
})
export class ClientsComponent implements AfterContentInit {

    constructor(
        meta: Meta,
        title: Title
    ) {
        title.setTitle('Clients - Frannca');

        meta.updateTag({ name: 'description', content: 'The clients are fundamental for the existence of a company.' });
    }

    ngAfterContentInit() {
        setTimeout(() => {
            const header = jQuery('#clients').position();
            jQuery('body').animate({ scrollTop: header.top + 10 }, 1000);
        }, 500);
    }

}
