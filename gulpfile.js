/*

REQUIRED STUFF
==============
*/

var changed     = require('gulp-changed');
var gulp        = require('gulp');
var imagemin    = require('gulp-imagemin');
var sass        = require('gulp-sass');
var sourcemaps  = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var notify      = require('gulp-notify');
var prefix      = require('gulp-autoprefixer');
var minifycss   = require('gulp-clean-css');
var uglify      = require('gulp-uglify');
var cache       = require('gulp-cache');
var concat      = require('gulp-concat');
var util        = require('gulp-util');
var header      = require('gulp-header');
var pixrem      = require('gulp-pixrem');
var runSequence = require('run-sequence');
var exec        = require('child_process').exec;

/*

ERROR HANDLING
==============
*/


var handleError = function(task) {
  return function(err) {

      notify.onError({
        message: task + ' failed, check the logs..',
        sound: true
      })(err);

    util.log(util.colors.bgRed(task + ' error:'), util.colors.red(err));
  };
};

/*

FILE PATHS
==========
*/

var imgSrc = 'src/images/*.{png,jpg,jpeg,gif}';
var imgDest = 'dist/images';
var sassSrc = 'src/sass/**/*.{sass,scss}';
var sassFile = 'src/sass/base/global.scss';
var cssDest = 'dist/css';
var jsSrc = 'src/js';
var jsDest = 'dist/js';
var markupDist = 'src/*.php';
var markupSrc = 'dist/*.php';
var markupDest = 'dist';

/*

BROWSERSYNC
===========
*/

gulp.task('browserSync', function() {

    var files = [
      imgDest + '/*.{png,jpg,jpeg,gif}',
      jsSrc + '/**/*.js',
      markupSrc,
      markupDist
    ];

    browserSync.init(files, {
        proxy: "rolle.design.test",
        browser: "Google Chrome Canary",
        notify: true
    });
});

/*

STYLES
======
*/

gulp.task('styles', function() {
  gulp.src(sassFile)

  .pipe(sass({
    compass: false,
    bundleExec: true,
    sourcemap: false,
    style: 'compressed',
    debugInfo: true,
    lineNumbers: true,
    errLogToConsole: true,
    includePaths: [
      'node_modules/',
      // 'bower_components/',
      // require('node-bourbon').includePaths
    ],
  }))

  .on('error', handleError('styles'))
  .pipe(prefix('last 3 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
  .pipe(minifycss({keepBreaks:false,keepSpecialComments:0,}))
  .pipe(pixrem())
  .pipe(gulp.dest(cssDest))
  .pipe(browserSync.stream());

  });

/*

IMAGES
======
*/

gulp.task('images', function() {
  var dest = imgDest;

  return gulp.src(imgSrc)

    .pipe(changed(dest)) // Ignore unchanged files
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true }))) //use cache to only target new/changed files, then optimize the images
    .pipe(gulp.dest(imgDest));

});

/*

SCRIPTS
=======
*/

var currentDate   = util.date(new Date(), 'dd-mm-yyyy HH:ss');
var pkg           = require('./package.json');
var banner        = '/*! <%= pkg.name %> <%= currentDate %> - <%= pkg.author %> */\n';

gulp.task('js', function() {

      gulp.src(
        [
          'node_modules/jquery/dist/jquery.js',
          'node_modules/what-input/dist/what-input.js',
          '/node_modules/moment/min/moment-with-locales.min.js',
          jsSrc + '/jquery-ui.js',
          jsSrc + '/jquery-cookie.js',
          jsSrc + '/jquery-rss.js',
          jsSrc + '/scripts.js',
        ])
        .pipe(concat('all.js'))
        .pipe(uglify({
          compress: true,
          mangle: true}).on('error', function(err) {
            util.log(util.colors.red('[Error]'), err.toString());
            this.emit('end');
        }))
        .pipe(header(banner, {pkg: pkg, currentDate: currentDate}))
        .pipe(gulp.dest(jsDest));
});

/*

WATCH
=====

Notes:
   - browserSync automatically reloads any files
     that change within the directory it's serving from
*/

// Run the JS task followed by a reload
gulp.task('js-watch', ['js'], browserSync.reload);

gulp.task('watch', ['browserSync'], function() {

  gulp.watch(sassSrc, ['styles']);
  gulp.watch(imgSrc, ['images']);
  gulp.watch(jsSrc + '/**/*.js', ['js-watch']);
});
