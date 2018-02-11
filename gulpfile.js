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
    gulp.src('./node_modules/flag-icon-css/css/*')
        .pipe(gulp.dest('src/assets/css/flag-icon/'));
    gulp.src('./node_modules/flag-icon-css/flags/**/*')
        .pipe(gulp.dest('src/assets/css/flags'));
});

// Build assets
gulp.task('build-assets', [
    'copy-semantic-ui',
    'copy-jquery',
]);