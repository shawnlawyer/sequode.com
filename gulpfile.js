var gulp = require('gulp');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
gulp.task('lint', function() {
	return gulp.src('resource/assets/js/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('default'));
});
gulp.task('auth-console-js', function() {
	return gulp.src([
        'resource/js/shared/*.js',
		'resource/js/sequode-console/AuthConsoleRegistry.js',
		'resource/js/sequode-console/AuthConsole.js',
		'resource/js/sequode-console/auth-main.js'
	])
	.pipe(concat('auth-console.min.js'))
	.pipe(gulp.dest('www/assets/js/'))
});
gulp.task('sequode-console-js', function() {
	return gulp.src([
        'resource/js/shared/*.js',
        'resource/js/sequode-console/Configuration.js',
		'resource/js/sequode-console/SymbolsKit.js',
		'resource/js/sequode-console/BaseKit.js',
		'resource/js/sequode-console/EventsKit.js',
		'resource/js/sequode-console/ShapesKit.js',
		'resource/js/sequode-console/CardsKit.js',
		'resource/js/sequode-console/Cards.js',
		'resource/js/sequode-console/XHR.js',
		'resource/js/sequode-console/Model.js',
		'resource/js/sequode-console/ModelEnds.js',
		'resource/js/sequode-console/Sequencer.js',
		'resource/js/sequode-console/SequencerPalette.js',
		'resource/js/sequode-console/CollectionCards.js',
		'resource/js/sequode-console/SequodeConsoleRegistry.js',
		'resource/js/sequode-console/SequodeConsole.js',
		'resource/js/sequode-console/sequode-main.js'
	])
	.pipe(concat('sequode-console.min.js'))
	.pipe(gulp.dest('www/assets/js/'))
});
gulp.task('watch', function() {
	gulp.watch('resource/js/*.js', ['lint','sequode-console-js','auth-console-js']);
});
gulp.task('default', ['lint', 'sequode-console-js','auth-console-js']);