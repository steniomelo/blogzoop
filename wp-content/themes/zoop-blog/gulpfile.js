'use strict';

var gulp        = require('gulp');
var plugin      = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var plumber     = require('gulp-plumber');
var reload      = browserSync.reload;
var publicUrl   = '';
var uglifycss   = require('gulp-uglifycss');
var uglify      = require('gulp-uglify');
var spritesmith = require('gulp.spritesmith');
var htmlmin     = require('gulp-htmlmin');


var AUTOPREFIXER_BROWSERS = [
  'ie >= 8',
  'ie_mob >= 10',
  'ff >= 15',
  'chrome >= 30',
  'safari >= 5',
  'opera >= 23',
  'ios >= 6',
  'android >= 2.3',
  'bb >= 10'
];


// Sprites
gulp.task('sprite', function () {
  var spriteData = gulp.src('img/sprites/**/*.png')
  .pipe(spritesmith({
    imgName: 'sprite.png',
    imgPath : 'img/sprite.png',
    cssName: '_sprites.scss',
    algorithm: 'top-down',
    padding: 10 
  }));
  spriteData.img.pipe(gulp.dest('img'));
  spriteData.css.pipe(gulp.dest('scss/utils'));
});


// copilando o scss e adicionando os prefix
gulp.task('styles', function () {
  return gulp.src(['scss/*.scss'])
  .pipe(plumber(function(error){
    console.log("Error happend!", error.message);
    this.emit('end');
  }))
  .pipe(plugin.changed('styles', {extension: '.scss'}))
  .pipe(plugin.sass().on('error', console.error.bind(console)))
  .pipe(plugin.autoprefixer(AUTOPREFIXER_BROWSERS))
  .pipe(plumber.stop())
  .pipe(uglifycss({
    "uglyComments": true
  }))
  .pipe(gulp.dest('./'));
});


// observando mudanças para da reload
gulp.task('serve', ['styles'], function () {
  browserSync({
    notify: false,
    proxy: 'localhost/'
  });
  gulp.watch(['scss/**/*.scss'], ['styles']);
  gulp.watch(['./*.css'], reload);
  gulp.watch(['js/**/*.js'], reload);
  gulp.watch(['img/sprites/**/*.png'], ['sprite']);
  gulp.watch(['img/*'], reload);
});


// Otimizar os aquivos html, css, js e imagens
gulp.task('compress-js', function() {
  gulp.src(['js/**/*.js'])
    .pipe(uglify())
    .pipe(gulp.dest('../build/public/js'))
});
gulp.task('compress-html', function() {
  return gulp.src(['../app/views/**/*.php','!../app/views/gwm/**/*.php'])
    .pipe(htmlmin({
      collapseWhitespace: true,
      removeComments: true
    }))
    .pipe(gulp.dest('../build/app/views'))
});

gulp.task('build', ['compress-html', 'compress-js']);


// Task padrão, exibe o menu de tasks
gulp.task('default', function (callback) {
  plugin.menu(this);
});
