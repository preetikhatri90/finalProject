const gulp = require('gulp');
const imagewebp = require('gulp-webp');
const imagemin = require('gulp-imagemin');
// const optimage = require('gulp-image');
const postcss = require('gulp-postcss');
const concat = require('gulp-concat');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const htmlmin = require('gulp-htmlmin');
const sourcemaps = require('gulp-sourcemaps');
const  plumber = require('gulp-plumber');
const fileinclude = require('gulp-file-include');
const strip = require('gulp-strip-comments');
const {src, series, parallel, dest, watch}= require('gulp');



// function copyHtml(){
// return src('src/*.html').pipe(gulp.dest('dist'));
// }


function cssTask() {
  return src('src/scss/*.css')
    .pipe(sourcemaps.init())
    .pipe(concat('style.css'))
    .pipe(postcss([autoprefixer(), cssnano()])) 
    .pipe(sourcemaps.write('.'))
    .pipe(dest('dist/scss'));
}

function fonts() {
    return gulp.src(['src/fonts/**']).pipe(gulp.dest('dist/fonts'));
};



function minhtml() {
  return src('src/*.html')
  .pipe(plumber())
  .pipe(
      strip({
          safe: '<!--[if',
      })
  )
  .pipe(
    fileinclude({
        prefix: '@@',
        basepath: '@file',
    })
)

  .pipe(htmlmin({ collapseWhitespace: true}))
  .pipe(dest('dist'));
}

function watchTask() {
  watch(['src/scss/*.css'], { interval: 1000 }, parallel(cssTask));
}


function optimizeimageone() {
  return src('src/img/*.{jpg,png}')
  .pipe(imagemin())                             
  .pipe(dest('dist/img'))
}

function optimizeimagetwo() {
    return src('src/img/blog/*.{jpg,png}')
    .pipe(imagemin())                             
    .pipe(dest('dist/img/blog'))
  }
  
  function optimizeimagethree() {
    return src('src/img/body/*.{jpg,png}')
    .pipe(imagemin())                             
    .pipe(dest('dist/img/body'))
  }
  function optimizeimagefour() {
    return src('src/img/contact/*.{jpg,png}')
    .pipe(imagemin())                             
    .pipe(dest('dist/img/contact'))
  }



exports.cssTask = cssTask;
exports.default = series(
parallel(fonts, minhtml, cssTask, optimizeimageone,optimizeimagetwo,optimizeimagethree, optimizeimagefour
  ),
  watchTask
);