const gulp = require('gulp');
const sass = require('gulp-sass');
const pug = require('gulp-pug');
const browserSync = require('browser-sync').create();
const watch = require('gulp-watch');
const gutil = require('gulp-util');
const rename = require('gulp-rename');

gulp.task('styles', function(){
  return gulp
        .src('./source/sass/main.scss')
        .pipe(sass())
        .on('error', gutil.log)
        .pipe(gulp.dest('./public/css'))
        .pipe(browserSync.stream());

});

gulp.task('pages', function(){
  return gulp
        .src('./source/pages/**/*.pug')
        .on('error', gutil.log)
        .pipe(pug({pretty: true}))
        .pipe(rename({
            extname: '.php'
        }))
        .pipe(gulp.dest('./public'))
        .pipe(browserSync.stream());

});

gulp.task('copy', function(){
    return gulp
            .src('./source/img/*', {base: './source/img/'})
            .pipe(watch('./source/img/', {base: './source/img/'}))
            .pipe(gulp.dest('./public/img'))
            .pipe(browserSync.stream());



});

gulp.task('copy_js', function(){
    return gulp
            .src('./source/js/*.js', {base: './source/js/'})
            .pipe(watch('./source/js/*.js', {base: './source/js/'}))
            .pipe(gulp.dest('./public/js'))
            .pipe(browserSync.stream());



});

gulp.task('serve', ['styles', 'pages'], function() {

    browserSync.init({
         proxy: "web.sdu"
    });

    gulp.watch('./source/**/*.scss', ['styles'])
    gulp.watch('./source/pages/**/*.pug', ['pages'])
    gulp.watch('./source/js/*.js', ['copy_js'])
    gulp.watch('./source/img/*', ['copy'])
    gulp.watch('./public/**/*.php').on('change', browserSync.reload)
});



gulp.task('default', ['pages', 'styles', 'copy' , 'copy_js' , 'serve']);