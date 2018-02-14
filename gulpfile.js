var gulp = require('gulp');

// Copy Semantic UI files to assets folder
gulp.task('copy-semantic-ui', function() {
    gulp.src('./semantic/dist/**/*')
        .pipe(gulp.dest('src/assets/semantic/'));
});

// Copy jQuery files to assets folder
gulp.task('copy-jquery', function() {
    gulp.src('./node_modules/jquery/dist/*')
        .pipe(gulp.dest('src/assets/js/jquery/'));
});

// Copy flags
gulp.task('copy-flags', function() {
    gulp.src('./node_modules/flag-icon-css/flags/4x3/br.svg')
        .pipe(gulp.dest('src/assets/images/flags'));
});

// Build assets
gulp.task('build-assets', [
    'copy-semantic-ui',
    'copy-jquery',
]);