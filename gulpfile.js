/**
 * gulpfile.js
 * @package seem
 * @author Scott Shealy
 * @version 1.0.0
 * @copyright 02/21
**/

// PLUGINS
    var
        gulp = require('gulp'),
        plumber = require('gulp-plumber'),
        rename = require('gulp-rename'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer'),
        sourcemaps = require('gulp-sourcemaps'),
        mediaqueries = require('gulp-group-css-media-queries'),
        minifycss = require('gulp-clean-css'),
        minifyhtml = require('gulp-htmlmin'),
        minifyjs = require('gulp-uglify'),
        minifyimg = require('gulp-imagemin')
    ;

// FILE PATHS
    var paths = {
        root: '.',

        theme: {
            name: 'seem',
            dest: '.'
        },

        html: {
            dir: './src/html/**/*.html',
            src: './src/html/**/*.html',
            dest: './dist/html/.'
        },

        sass: {
            dir: './src/sass/**/**/*.scss',
            src: './src/sass/style.scss',
            dest: './dist/css/.'
        },

        js: {
            dir: './src/js/**/*.js',
            src: './src/js/script.js',
            dest: './dist/js/.'
        },

        svg: {
            dir: './src/svg/**/*.svg',
            src: './src/svg/**/*.svg',
            dest: './dist/svg/.'
        },

        img: {
            dir: './src/img/**/*.*',
            src: './src/img/**/*.*',
            dest: './dist/img/.'
        }
    };

// TASK | HTML
    function compileHTML() {
        return gulp
            .src(paths.html.src, {allowEmpty: true})
            .pipe(plumber())
            .pipe(minifyhtml({collapseWhitespace: true, removeComments: true}))
            .pipe(gulp.dest(paths.html.dest))
    }

// TASK | IMG
    function compileIMG() {
        return gulp
            .src(paths.img.src, {allowEmpty: true})
            .pipe(plumber())
            .pipe(minifyimg())
            .pipe(gulp.dest(paths.img.dest))
    }

// TASK | JS
    function compileJS() {
        return gulp
            .src(paths.js.src, {allowEmpty: true})
            .pipe(plumber())
            .pipe(rename({suffix: '.min'}))
            .pipe(minifyjs())
            .pipe(gulp.dest(paths.js.dest))
    }

// TASK | SASS
    function compileSASS() {
        return gulp
            .src(paths.sass.src, {allowEmpty: true})
            .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(sass({outputStyle: 'expanded'}))
            .pipe(autoprefixer('last 3 versions'))
            .pipe(sourcemaps.write())
            .pipe(mediaqueries())
            .pipe(gulp.dest(paths.sass.dest))
            .pipe(gulp.dest(paths.theme.dest))

            .pipe(rename({suffix: '.min'}))
            .pipe(minifycss())
            .pipe(gulp.dest(paths.sass.dest))
            .pipe(gulp.dest(paths.theme.dest))
    }

// TASK | SVG
    function compileSVG() {
        return gulp
            .src(paths.svg.src, {allowEmpty: true})
            .pipe(plumber())
            .pipe(minifyhtml({collapseWhitespace: true, removeComments: true}))
            .pipe(gulp.dest(paths.svg.dest))
    }

// TASK | WATCHFILES
    function watchFiles() {
        gulp.watch(paths.html.dir, compileHTML),
        gulp.watch(paths.img.dir, compileIMG),
        gulp.watch(paths.js.dir, compileJS),
        gulp.watch(paths.sass.dir, compileSASS),
        gulp.watch(paths.svg.dir, compileSVG)
    }

// EXECUTE TASKS
    gulp.task('build', compileHTML, compileIMG, compileJS, compileSASS, compileSVG);
    gulp.task('default', gulp.series('build', watchFiles));