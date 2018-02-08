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

// Build assets
gulp.task('build-assets', [
    'copy-semantic-ui',
    'copy-jquery',
]);