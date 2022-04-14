var
  gulp = require('gulp');
browserSync = require('browser-sync');
sass = require('gulp-sass');
imagemin = require('gulp-imagemin');
concat = require('gulp-concat');
rename = require('gulp-rename');
uglify = require('gulp-uglify-es').default;
purgecss = require('gulp-purgecss');
purgecssWordpress = require('purgecss-with-wordpress');

// CONSTANTES
const dir = {
  src: 'wp-content/themes/solar/gulp',
  node: 'node_modules',
  build: 'wp-content/themes/solar'
}

// BROWSER SYNC
gulp.task('browser-sync', function () {
  var files = [
    `${dir.build}/**/*.php`,
    `${dir.build}/css/*.css`,
    `${dir.build}/js/*.js`
  ];

  browserSync.init(files, {
    proxy: "http://localhost/solar/",
    notify: true,
  });
});

// SASS
gulp.task('sass', function () {
  return gulp.src([`${dir.src}/scss/**/*.scss`])
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(gulp.dest(`${dir.src}/css`))
});

// PURGECSS
gulp.task('purgecss', ['sass'], function () {
  return gulp.src(`${dir.src}/css/*.css`)
    .pipe(purgecss({
      content: [`${dir.build}/**/*.php`],
      whitelist: [],
      safelist: [],
      whitelistPatterns: []
    }))
    .pipe(gulp.dest(`${dir.build}/css`))
});

// IMAGEMIN
gulp.task('imagemin', function () {
  return gulp.src(`${dir.src}/images/*`)
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [
        { removeViewBox: false },
        { cleanupIDs: false }
      ]
    }))
    .pipe(gulp.dest(`${dir.build}/images`))
});

// JS
gulp.task('js', function () {
  return gulp.src([
    `${dir.src}/js/components/jquery-3.5.1.min.js`,
    `${dir.src}/js/components/popper-1.16.1.min.js`,
    `${dir.src}/js/components/bootstrap-4.5.0.min.js`,
    `${dir.src}/js/components/jquery.mask-1.14.16.min.js`,
    `${dir.src}/js/components/jquery.validate-1.19.2.min.js`,
    `${dir.src}/js/rd-acoes.js`
  ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest(`${dir.src}/js`))
    .pipe(rename('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest(`${dir.build}/js`))
});

// WATCH
gulp.task('watch', function () {
  gulp.watch(`${dir.src}/scss/**/*.scss`, ['purgecss'])
  gulp.watch(`${dir.src}/js/**/*.js`, ['js'])
  gulp.watch(`${dir.src}/images/*`, ['imagemin'])
});

gulp.task('default', ['watch', 'browser-sync'])