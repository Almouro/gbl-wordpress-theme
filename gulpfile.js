var gulp = require('gulp');
var stylus = require('gulp-stylus');
var rename = require('gulp-rename');
var nib = require('nib');

gulp.task('stylus', function () {
  gulp.src('./styles/main.styl')
    .pipe(stylus({
      'include css': true,
      use: nib(),
    }))
    .pipe(rename('style.css'))
    .pipe(gulp.dest('.'));
});

gulp.task('watch', function() {
  gulp.watch('styles/*.styl', ['stylus']);
});

gulp.task('build', ['stylus']);

gulp.task('default', ['build', 'watch']);
