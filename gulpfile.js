var gulp = require('gulp4');
var less = require('gulp-less');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

var paths = {

	appJS :  {
        src:[
            'resource/js/app/XHR.js',
            'resource/js/app/BaseKit.js',
            'resource/js/app/CardsKit.js',
            'resource/js/app/EventsKit.js',
            'resource/js/app/ShapesKit.js',
            'resource/js/app/SymbolsKit.js',
            'resource/js/app/Cards.js',
            'resource/js/app/CollectionCards.js',
            'resource/js/app/Configuration.js',
            'resource/js/app/Model.js',
            'resource/js/app/ModelEnds.js',
            'resource/js/app/Sequencer.js',
            'resource/js/app/SequencerPalette.js',
            'resource/js/app/Registry.js',
            'resource/js/app/Console.js',
            'resource/js/app/main.js'
        ],
        dest: 'public/assets/js/',
        name: 'app.min.js'
    }
};


function appJS() {
	return gulp.src(paths.appJS.src)
	.pipe(concat(paths.appJS.name))
	.pipe(gulp.dest(paths.appJS.dest));
}


function watch() {
	gulp.watch('./resource/js/app/*.js').on('change', appJS);
}

function build (done) {
    gulp.series(gulp.parallel(appJS))();
    done();

}


exports.appJS = appJS;
exports.watch = watch;
exports.default = build;
exports.build = build;
