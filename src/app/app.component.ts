import { OnInit, Component } from '@angular/core';

declare var jQuery: any;

@Component({
    selector: 'app-root',
    templateUrl: './app.component.html',
    styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
    title = 'app';

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
