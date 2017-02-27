var gulp = require('gulp');
var stylus = require('gulp-stylus');
var rupture = require('rupture')();
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');

var srcPaths = {
	mainCSS: 'css/style.css',
	secondaryCSS: 'css/layouts/**/*.css',
	styl: 'css/layouts/styl/styles.styl',
	allStyl: 'css/layouts/styl/**/**.styl',
	php: '**/*.php'
};

var buildPaths = {
	css: './',
};

var reload = browserSync.reload;

function refresh() {
  setTimeout(function () {
    reload();
  }, 500);
}

function onError(err) {
  console.log(err);
  this.emit('end');
}

gulp.task('css', function() {
	gulp.src([srcPaths.secondaryCSS, srcPaths.mainCSS, srcPaths.styl])
	.pipe(plumber())
	.pipe(stylus({ 'include css': true, use: [rupture] }))
	.pipe(concat('style.css'))
	.pipe(cleanCSS({ compatibility: 'ie8' }))
	.pipe(gulp.dest(buildPaths.css));
});

gulp.task('watch', function(){
	gulp.watch([srcPaths.mainCSS, srcPaths.secondaryCSS, srcPaths.allStyl], ['css']);
	gulp.watch(srcPaths.php);
});

gulp.task('default', ['css', 'watch']);