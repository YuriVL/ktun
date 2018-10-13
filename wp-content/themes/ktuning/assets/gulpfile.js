var gulp = require('gulp'),
    useref = require('gulp-useref'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css'),
    sourcemaps = require('gulp-sourcemaps'),
    /*
    minifyCss = require('gulp-minify-css'),
    clean = require('gulp-clean'),*/
    imagemin = require('gulp-imagemin'),
    wiredep = require('wiredep').stream;
//Html
gulp.task('html', function () {
    return gulp.src('app/*.html')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulp.dest('dist'));
});
/*gulp.task('default', function () {
  return gulp.src('assets/templates/cci/css/*.css')
    //.pipe(concatCss("style.css"))
	.pipe(minifyCSS({keepBreaks:true}))
	.pipe(rename('style.min.css'))
    .pipe(gulp.dest('app/assets/templates/cci/css/'));
});*/
gulp.task('images', function(cb) {
    gulp.src('app/images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'));
});
// Fonts
gulp.task('fonts', function() {
    return gulp.src([
                    'app/bower_components/components-font-awesome/fonts/fontawesome-webfont.*',
                    'app/bower_components/bootstrap/fonts/glyphicons-halflings-regular.*',
                    'app/fonts/flaticon.*',
                      ])
            .pipe(gulp.dest('dist/fonts/'));
});
// Clean && minify
/*gulp.task('minify-css', () => {
    return gulp.src('styles/*.css')
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist'));
});*/
gulp.task('minify-css', function() {
    return gulp.src('styles/*.css')
        .pipe(sourcemaps.init())
        .pipe(cleanCSS())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist'));
});
// Build
gulp.task('build', ['html', 'images', 'fonts']);

// Default task
gulp.task('default', ['minify-css'], function () {
    gulp.start('build');
});
gulp.task('bower', function () {
  gulp.src('./app/*.html')
    .pipe(wiredep({
      directory:"app/bower_components"
    }))
    .pipe(gulp.dest('./app'));
});
gulp.task('watch', function(){
   gulp.watch('bower.json', ['bower']);   
});