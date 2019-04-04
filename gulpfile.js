const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const sass = require('gulp-sass')

gulp.task('scripts', () => {
  return gulp.src('src/js/**/*.js')
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(gulp.dest('js/'))
});

sass.compiler = require('node-sass');
 
gulp.task('styles', function () {
  return gulp.src('./src/scss/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
    }))
    .pipe(gulp.dest('./css'));
});

gulp.task('default', () => {
  gulp.watch('./src/scss/**/*.scss', gulp.series('styles')),
  gulp.watch('./src/js/**/*.js', gulp.series('scripts'));
  return;
});