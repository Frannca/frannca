/** Load Gulp plugins */
var gulp        = require('gulp');
var concat      = require('gulp-concat');
var concatCss   = require('gulp-concat-css');
var compressor  = require('gulp-compressor');
var sass        = require('gulp-sass');

/** Sass generate */
gulp.task('sass', function () {
    gulp.src([
            './plugins/MaterialDesignLite/webroot/sass/*.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/css/output/'));
});

/** JavaScript generate */
gulp.task('js', function() {
    gulp.src('./bower_components/material-design-lite/material.min.js')
        .pipe(concat('all.js'))
        .pipe(compressor())
        .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/js/'));
});

/** CSS generate */
gulp.task('css', function () {
    gulp.src('./plugins/MaterialDesignLite/webroot/css/output/*.css')
        .pipe(concatCss('all.min.css'))
        .pipe(compressor({
            'executeOption': {
                maxBuffer: 10000*1024
            }
        }))
        .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/css/'));
});

/** Octicons generate **/
gulp.task('copyfonts', function() {
    gulp.src('./bower_components/octicons/octicons/*.{ttf,woff,eof,svg}')
    .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/css/separate/octicons/'));
});

gulp.task('octicons', ['copyfonts'], function() {
    gulp.src([
            './bower_components/octicons/octicons/octicons.scss'
        ])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./plugins/MaterialDesignLite/webroot/css/separate/octicons/'));
});