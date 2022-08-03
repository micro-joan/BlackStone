'use strict'
var gulp = require('gulp');
var injectPartials = require('gulp-inject-partials');
var inject = require('gulp-inject');
var rename = require('gulp-rename');
var prettify = require('gulp-prettify');
var replace = require('gulp-replace');
var merge = require('merge-stream');




/* inject partials like sidebar and navbar */
gulp.task('injectPartial', function () {
    return gulp.src(["./pages/*/*.html", "./index.html"], {
            base: "./"
        })
        .pipe(injectPartials())
        .pipe(gulp.dest("."));
});



/* inject Js and CCS assets into HTML */
gulp.task('injectAssets', function () {
    return gulp.src(["./**/*.html"])
        .pipe(inject(gulp.src([
            './assets/vendors/mdi/css/materialdesignicons.min.css',
            './assets/vendors/css/vendor.bundle.base.css',
            './assets/vendors/js/vendor.bundle.base.js',
        ], {
            read: false
        }), {
            name: 'plugins',
            relative: true
        }))
        .pipe(inject(gulp.src([
            './assets/js/off-canvas.js',
            './assets/js/hoverable-collapse.js',
            './assets/js/misc.js',
            './assets/js/settings.js',
            './assets/js/todolist.js'
        ], {
            read: false
        }), {
            relative: true
        }))
        .pipe(gulp.dest('.'));
});



/*replace image path and linking after injection*/
gulp.task('replacePath', function () {
    var replacePath1 = gulp.src('./pages/**/*.html', {
            base: "./"
        })
        .pipe(replace('src="assets/images/', 'src="../../assets/images/'))
        .pipe(replace('href="pages/', 'href="../../pages/'))
        .pipe(replace('href="documentation"', 'href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html"'))
        .pipe(replace('href="index.html"', 'href="../../index.html"'))
        .pipe(gulp.dest('.'));
    var replacePath2 = gulp.src('./**/index.html', {
            base: "./"
        })
        .pipe(replace('href="documentation"', 'href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html"'))
        .pipe(gulp.dest('.'));
    return merge(replacePath1, replacePath2);
});



gulp.task('html-beautify', function () {
    return gulp.src(['./**/*.html', '!node_modules/**/*.html'])
        .pipe(prettify({
            unformatted: ['pre', 'code', 'textarea']
        }))
        .pipe(gulp.dest(function (file) {
            return file.base;
        }));
});

/*sequence for injecting partials and replacing paths*/
gulp.task('inject', gulp.series('injectPartial', 'injectAssets', 'html-beautify', 'replacePath'));