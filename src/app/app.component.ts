import { OnInit, Component } from '@angular/core';
import { Meta, Title } from '@angular/platform-browser';

declare var jQuery: any;

@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
    title = 'app';

    constructor(
        meta: Meta,
        title: Title
    ) {
        title.setTitle('Frannca');

        meta.addTags([
            { name: 'author', content: 'Frannca' },
            { name: 'description', content: 'Solutions for your business.' },
        ]);
    }

    ngOnInit() {
        // fix menu when passed
        jQuery('.masthead')
            .visibility({
                once: false,
                onBottomPassed: function() {
                    jQuery('.fixed.menu').transition('fade in');
                },
                onBottomPassedReverse: function() {
                    jQuery('.fixed.menu').transition('fade out');
                }
            })
        ;
    }

}
