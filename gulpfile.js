const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');


gulp.task('move-css', () => {
  return gulp.src('src/css/*.css')
    .pipe(gulp.dest('build/css'))
});