/** Load Gulp plugins */
var gulp        = require('gulp');
var concat      = require('gulp-concat');
var concatCss   = require('gulp-concat-css');
var compressor  = require('gulp-compressor');

/** JavaScript generate */
gulp.task('js', function() {
    gulp.src('./bower_components/material-design-lite/material.min.js')
        .pipe(concat('all.js'))
        .pipe(compressor())
        .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/js/'));
});

/** CSS generate */
gulp.task('css', function () {
    gulp.src('./bower_components/material-design-lite/material.min.css')
        .pipe(concatCss('all.min.css'))
        .pipe(compressor({
            'executeOption': {
                maxBuffer: 10000*1024
            }
        }))
        .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/css/'));
});