const gulp = require('gulp'),
      plumber = require('gulp-plumber'),
      rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const sass = require('gulp-sass');


gulp.task('styles', () => {
  gulp.src(['src/scss/**/*.scss'])
    .pipe(plumber({
      errorHandler: error => {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('css/'))
});

gulp.task('scripts', () => {
  return gulp.src('src/js/**/*.js')
    .pipe(plumber({
      errorHandler: error => {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(babel({
      presets: ['env']
    }))
    .pipe(gulp.dest('js/'))
});

gulp.task('default', () => {
  gulp.watch("src/scss/**/*.scss", ['styles']);
  gulp.watch("src/js/**/*.js", ['scripts']);
});