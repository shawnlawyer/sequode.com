var gulp = require('gulp4');
var less = require('gulp-less');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var paths = {

	authConsoleJS : {
	    src:[
            'resource/js/shared/*.js',
            'resource/js/auth-console/AuthConsoleRegistry.js',
            'resource/js/auth-console/AuthConsole.js',
            'resource/js/auth-console/auth-main.js'
        ],
        dest: 'public/assets/js/',
        name: 'auth-console.min.js'
    },
	sequodeConsoleJS :  {
        src:[
            'resource/js/shared/*.js',
            'resource/js/sequode-console/BaseKit.js',
            'resource/js/sequode-console/Cards.js',
            'resource/js/sequode-console/CardsKit.js',
            'resource/js/sequode-console/CollectionCards.js',
            'resource/js/sequode-console/Configuration.js',
            'resource/js/sequode-console/EventsKit.js',
            'resource/js/sequode-console/Model.js',
            'resource/js/sequode-console/ModelEnds.js',
            'resource/js/sequode-console/Sequencer.js',
            'resource/js/sequode-console/SequencerPalette.js',
            'resource/js/sequode-console/SymbolsKit.js',
            'resource/js/sequode-console/ShapesKit.js',
            'resource/js/sequode-console/SequodeConsoleRegistry.js',
            'resource/js/sequode-console/SequodeConsole.js',
            'resource/js/sequode-console/sequode-main.js'
        ],
        dest: 'public/assets/js/',
        name: 'sequode-console.min.js'
    }
};


function authConsoleJS() {
	return gulp.src(paths.authConsoleJS.src)
	.pipe(concat('auth-console.min.js'))
	.pipe(gulp.dest('public/assets/js/'));
}

function sequodeConsoleJS() {
	return gulp.src(paths.sequodeConsoleJS.src)
	.pipe(concat('sequode-console.min.js'))
	.pipe(gulp.dest('public/assets/js/'));
}

function watch() {
	gulp.watch(paths.authConsoleJS.src, authConsoleJS);
	gulp.watch(paths.sequodeConsoleJS.src, sequodeConsoleJS);
}

function build (done) {
    gulp.series(gulp.parallel(sequodeConsoleJS, authConsoleJS))();
    done();

}


exports.authConsoleJS = authConsoleJS;
exports.sequodeConsoleJS = sequodeConsoleJS;
exports.watch = watch;
exports.default = build;
exports.build = build;
