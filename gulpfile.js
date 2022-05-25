const { src, dest, watch, parallel, series }  = require('gulp');

let scss  = require('gulp-sass')(require('sass'));
const concat        = require('gulp-concat');
const browserSync   = require('browser-sync').create();
const uglify        = require('gulp-uglify-es').default;
const autoprefixer  = require('gulp-autoprefixer');
const imagemin      = require('gulp-imagemin');
const del           = require('del');

function browsersync() {
    browserSync.init({
        base: 'public',
        proxy: 'wvolt',
        port: 3000
    });
}

function cleanDist() {
    return del('dist')
}

function images() {
    return src('resources/images/**/*')
        .pipe(imagemin(
            [
            imagemin.gifsicle({ interlaced: true }),
            imagemin.mozjpeg({ quality: 75, progressive: true }),
            imagemin.optipng({ optimizationLevel: 5 }),
            imagemin.svgo({
                plugins: [
                    { removeViewBox: true },
                    { cleanupIDs: false }
                ]
            })
            ]
        ))
            .pipe(dest('public/images'))
}

function scripts() {
    return src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/slick-carousel/slick/slick.js',
        'resources/js/main.js'
    ])
        .pipe(concat('main.min.js'))
        .pipe(uglify())
        .pipe(dest('public/js'))
        .pipe(browserSync.stream())
}


function styles() {
    return src('resources/scss/style.scss')
        .pipe(scss({outputStyle: 'compressed'}))
        .pipe(concat('style.min.css'))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 10 version'],
            grid: true
        }))
            .pipe(dest('public/css'))
            .pipe(browserSync.stream())
}

function build() {
    return src([
        'app/css/style.min.css',
        'app/fonts/**/*',
        'app/js/main.min.js',
        'app/*.html'
    ], {base: 'app'})
        .pipe(dest('dist'))
}

function watching() {
    watch(['resources/scss/**/*.scss'], styles);
    watch(['resources/js/**/*.js'], scripts);
    watch(['resources/views/*.php']).on('change', browserSync.reload);
}

exports.styles = styles;
exports.watching = watching;
exports.browsersync = browsersync;
exports.scripts = scripts;
exports.images = images;
exports.cleanDist = cleanDist;


exports.build = series(cleanDist, images, build);
exports.default = parallel(styles ,scripts ,browsersync, watching);


