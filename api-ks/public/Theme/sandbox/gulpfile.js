'use strict';

/* Paths */
var path = {
  dev: {
    html: 'assets/dev/',
    js: 'assets/dev/js/',
    css: 'assets/dev/css/',
    style: 'assets/dev/css/theme/',  
    fontcss: 'assets/dev/css/font/',
    img: 'assets/dev/img/',
    fonts: 'assets/dev/fonts/',
    media: 'assets/dev/media/',
    php: 'assets/dev/php/'
  },
    dist: {
    html: 'assets/dist/',
    js: 'assets/dist/js/',
    css: 'assets/dist/css/',
    style: 'assets/dist/css/theme/',  
    fontcss: 'assets/dist/css/font/',
    img: 'assets/dist/img/',
    fonts: 'assets/dist/fonts/',
    media: 'assets/dist/media/',
    php: 'assets/dist/php/'
  },
    src: {
    html: 'assets/src/html/*.html',
    partials: 'assets/src/html/partials/',
    js: 'assets/src/js/',
    vendorjs: 'assets/src/js/vendor/*.*',
    themejs: 'assets/src/js/theme.js',
    style: 'assets/src/scss/style/*.*',  
    fontcss: 'assets/src/scss/font/*.*',       
    vendorcss: 'assets/src/css/vendor/*.*',
    img: 'assets/src/img/**/*.*',
    fonts: 'assets/src/fonts/**/*.*',
    media: 'assets/src/media/**/*.*',
    php: 'assets/src/php/**/*.*'
  },
    watch: {
    html: 'assets/src/**/*.html',
    partials: 'assets/src/html/partials/',
    themejs: 'assets/src/js/theme.js',
    vendorjs: 'assets/src/js/vendor/*.*',
    css: ['assets/src/scss/**/*.scss', '!assets/src/scss/font/*.scss'],
    fontcss: 'assets/src/scss/font/*.scss',
    vendorcss: 'assets/src/css/vendor/*.*',
    img: 'assets/src/img/**/*.*',
    fonts: 'assets/src/fonts/**/*.*',
    media: 'assets/src/media/**/*.*',
    php: 'assets/src/php/**/*.*'
  },
    clean: './assets/dev/*'
};

/* Server */
var config = {
    server: {
        baseDir: './assets/dist'
    },
    notify: false
};

/* Include gulp and plugins */
var gulp = require('gulp'),
    webserver = require('browser-sync'),
    plumber = require('gulp-plumber'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    uglify = require('gulp-uglify'),
    cache = require('gulp-cache'),
    imagemin = require('gulp-imagemin'),
    jpegrecompress = require('imagemin-jpeg-recompress'),
    pngquant = require('imagemin-pngquant'),
    del = require('del'),
    fileinclude = require('gulp-file-include'),
    beautify = require('gulp-beautify'),
    minify = require('gulp-minify'),
    concat = require('gulp-concat'),
    jsImport = require('gulp-js-import'),
    changed = require('gulp-changed'),
    newer = require('gulp-newer'),
    touch = require('gulp-touch-cmd');

/* Tasks */

// Start the server
gulp.task('webserver', function () {
    webserver(config);
});

// Compile html
gulp.task('html:dev', function () {
  return gulp.src(path.src.html)
    .pipe(newer({ dest: path.dev.html, extra: path.src.partials }))
    .pipe(plumber())
    .pipe(fileinclude({ prefix: '@@', basepath: path.src.partials }))
    .pipe(beautify.html({ indent_size: 2, preserve_newlines: false }))
    .pipe(gulp.dest(path.dev.html))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});
gulp.task('html:dist', function () {
  return gulp.src(path.src.html)
    .pipe(newer({ dest: path.dist.html, extra: path.src.partials }))
    .pipe(plumber())
    .pipe(fileinclude({ prefix: '@@', basepath: path.src.partials }))
    .pipe(beautify.html({ indent_size: 2, preserve_newlines: false }))
    .pipe(gulp.dest(path.dist.html))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});

// Compile theme styles
gulp.task('css:dev', function () {
  return gulp.src(path.src.style)
    .pipe(changed(path.dev.style))
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(beautify.css({ indent_size: 2, preserve_newlines: false }))
    .pipe(gulp.dest(path.dev.style))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});
gulp.task('css:dist', function () {
  return gulp.src(path.src.style)
    .pipe(changed(path.dist.style))
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(beautify.css({ indent_size: 2, preserve_newlines: false }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.dist.style))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});

// Move fonts
gulp.task('fonts:dev', function () {
  return gulp.src(path.src.fonts)
    .pipe(changed(path.dev.fonts))
    .pipe(gulp.dest(path.dev.fonts));
});
gulp.task('fonts:dist', function () {
  return gulp.src(path.src.fonts)
    .pipe(changed(path.dist.fonts))
    .pipe(gulp.dest(path.dist.fonts));
});

// Compile font styles
gulp.task('fontcss:dev', function () {
  return gulp.src(path.src.fontcss)
    .pipe(changed(path.dev.fontcss))
    .pipe(plumber())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(beautify.css({ indent_size: 2, preserve_newlines: false }))
    .pipe(gulp.dest(path.dev.fontcss))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});
gulp.task('fontcss:dist', function () {
  return gulp.src(path.src.fontcss)
    .pipe(changed(path.dist.fontcss))
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(autoprefixer())
    .pipe(beautify.css({ indent_size: 2, preserve_newlines: false }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.dist.fontcss))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});

// Compile vendor styles
gulp.task('vendorcss:dev', function () {
  return gulp.src(path.src.vendorcss)
    .pipe(concat('plugins.css'))
    .pipe(beautify.css({ indent_size: 2, preserve_newlines: false }))
    .pipe(gulp.dest(path.dev.css))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});
gulp.task('vendorcss:dist', function () {
  return gulp.src(path.src.vendorcss)
    .pipe(concat('plugins.css'))
    .pipe(sourcemaps.init())
    .pipe(beautify.css({ indent_size: 2, preserve_newlines: false }))
    .pipe(cleanCSS())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.dist.css))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});

// Compile vendor plugins js
gulp.task('pluginsjs:dev', function() {
    return gulp.src(path.src.vendorjs)
    .pipe(jsImport({hideConsole: true}))
    .pipe(concat('plugins.js'))
    .pipe(gulp.dest(path.dev.js))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});
gulp.task('pluginsjs:dist', function() {
    return gulp.src(path.src.vendorjs)
    .pipe(jsImport({hideConsole: true}))
    .pipe(concat('plugins.js'))
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.dist.js))
    .pipe(touch())
    .pipe(webserver.reload({ stream: true }));
});

// Compile theme js
gulp.task('themejs:dev', function () {
  return gulp.src(path.src.themejs)
    .pipe(gulp.dest(path.dev.js))
    .pipe(plumber())
    .pipe(gulp.dest(path.dev.js))
    .pipe(webserver.reload({ stream: true }));
});
gulp.task('themejs:dist', function () {
  return gulp.src(path.src.themejs)
    .pipe(gulp.dest(path.dist.js))
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(path.dist.js))
    .pipe(webserver.reload({ stream: true }));
});

// Move media
gulp.task('media:dev', function () {
  return gulp.src(path.src.media)
    .pipe(changed(path.dev.media))
    .pipe(gulp.dest(path.dev.media));
});
gulp.task('media:dist', function () {
  return gulp.src(path.src.media)
    .pipe(changed(path.dist.media))
    .pipe(gulp.dest(path.dist.media));
});

// Move php
gulp.task('php:dev', function () {
  return gulp.src(path.src.php)
    .pipe(changed(path.dev.php))
    .pipe(gulp.dest(path.dev.php));
});
gulp.task('php:dist', function () {
  return gulp.src(path.src.php)
    .pipe(changed(path.dist.php))
    .pipe(gulp.dest(path.dist.php));
});

// Image processing
gulp.task('image:dev', function () {
  return gulp.src(path.src.img)
    .pipe(changed(path.dev.img))
    .pipe(cache(imagemin([
      imagemin.gifsicle({ interlaced: true }),
      jpegrecompress({
        progressive: true,
        max: 90,
        min: 80
      }),
      pngquant(),
      imagemin.svgo({ plugins: [{ removeViewBox: false }] })])))
    .pipe(gulp.dest(path.dev.img));
});
gulp.task('image:dist', function () {
  return gulp.src(path.src.img)
    .pipe(changed(path.dist.img))
    .pipe(cache(imagemin([
      imagemin.gifsicle({ interlaced: true }),
      jpegrecompress({
        progressive: true,
        max: 90,
        min: 80
      }),
      pngquant(),
      imagemin.svgo({ plugins: [{ removeViewBox: false }] })
        ])))
    .pipe(gulp.dest(path.dist.img));
});

// Remove catalog dev
gulp.task('clean:dev', function () {
  return del(path.clean);
});
gulp.task('clean:dist', function () {
  return del(path.clean);
});

// Clear cache
gulp.task('cache:clear', function () {
    cache.clearAll();
});

// Assembly Dev
gulp.task('build:dev',
    gulp.series('clean:dev',
      gulp.parallel(
      'html:dev',
      'css:dev',
      'fontcss:dev',
      'vendorcss:dev',
      'pluginsjs:dev',
      'themejs:dev',
      'fonts:dev',
      'media:dev',
      'php:dev',
      'image:dev'
      )
    )
);

// Assembly Dist
gulp.task('build:dist',
    gulp.series('clean:dist',
      gulp.parallel(
      'html:dist',
      'css:dist',
      'fontcss:dist',
      'vendorcss:dist',
      'pluginsjs:dist',
      'themejs:dist',
      'fonts:dist',
      'media:dist',
      'php:dist',
      'image:dist'
      )
    )
);


// Launching tasks when files change
gulp.task('watch', function () {
    gulp.watch(path.watch.html, gulp.series('html:dist'));
    gulp.watch(path.watch.css, gulp.series('css:dist'));
    gulp.watch(path.watch.fontcss, gulp.series('fontcss:dist'));
    gulp.watch(path.watch.vendorcss, gulp.series('vendorcss:dist'));
    gulp.watch(path.watch.vendorjs, gulp.series('pluginsjs:dist'));
    gulp.watch(path.watch.themejs, gulp.series('themejs:dist'));
    gulp.watch(path.watch.img, gulp.series('image:dist'));
    gulp.watch(path.watch.fonts, gulp.series('fonts:dist'));
    gulp.watch(path.watch.media, gulp.series('media:dist'));
    gulp.watch(path.watch.php, gulp.series('php:dist'));
});

// Serve
gulp.task('serve', gulp.series(
    gulp.parallel('webserver','watch')
));

// Dev
gulp.task('build:dev', gulp.series(
    'build:dev'
));

// Dist
gulp.task('build:dist', gulp.series(
    'build:dist'
));

// Default tasks
gulp.task('default', gulp.series(
    'build:dist',
    gulp.parallel('webserver','watch')
));
