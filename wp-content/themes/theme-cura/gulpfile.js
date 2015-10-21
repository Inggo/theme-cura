var gulp = require('gulp');
var modernizr = require('gulp-modernizr');
var sass = require('gulp-ruby-sass');
var spriter = require('gulp-css-spriter');
var autoprefixer = require('gulp-autoprefixer');

// Watch for changes
gulp.task('default', ['watch']);

// Build modernizr based on tests
gulp.task('modernizr', function() {
  gulp.src('./js/*.js')
    .pipe(modernizr({
      "dest" : "js/modernizr.js",
      "uglify" : false
    }));
});

// Build CSS based on SCSS files
gulp.task('sass', function() {
  return sass('scss/style.scss', {
    precision : 8,
    stopOnError : true
  })
  .on('error', sass.logError)
  .pipe(gulp.dest('.'));
});

// Build sprites based on stylesheets
gulp.task('css', function() {
  return gulp.src('./style.css')
    .pipe(spriter({
      'spriteSheet': './images/sprites.png',
      'pathToSpriteSheetFromCSS': './images/sprites.png'
    }))
  .pipe(gulp.dest('./'));
});

// Add CSS prefixes
gulp.task('autoprefixer', function () {
  return gulp.src('./style.css')
    .pipe(autoprefixer({
      browsers: ['not ie <= 8'],
      cascade: false
    }))
    .pipe(gulp.dest('./'));
});

// Initialize watchers
gulp.task('watch', function(){
  gulp.watch('./js/*.js', ['modernizr']);
  gulp.watch('./scss/style.scss', ['sass']);
  gulp.watch('./style.css', ['css', 'autoprefixer']);
});