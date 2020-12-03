const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const criticalCss = require('gulp-penthouse');
const postcss = require('gulp-postcss');
const uncss = require('postcss-uncss');
const webp = require('gulp-webp');
const imagemin = require('gulp-imagemin');
const penthouse = require('penthouse-pages');


gulp.task('sass', () => {
    return gulp.src('./resources/sass/frontend/project/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('frontend.css'))
        .pipe(gulp.dest('./public/css/'));
});

gulp.task('watch-styles', () => {
    gulp.watch(
        './resources/sass/frontend/project/**/*.scss',
        gulp.series('sass')
    )
});

gulp.task('concat-css', () => {
    return gulp.src(['./public/css/frontend.css', './public/css/framework.css'])
        .pipe(concat('main.min.css'))
        .pipe(cleanCSS({
            level: {
                1: {
                    normalizeUrls: false
                },
                2: {
                }
            }
        }))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('uncss', () => {

    let plugins = [
        uncss({
            html: [
                './resources/views/**/*.blade.php'
            ],
            ignore: [
                /.is-active/,
            ]
        })
    ];

    return gulp.src('./public/css/main.min.css')
        .pipe(postcss(plugins))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('img-min', done => {
    gulp.src('./resources/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./public/img/'))
    done();
});

gulp.task('webp', () =>
    gulp.src('./public/img/**/*')
        .pipe(webp())
        .pipe(gulp.dest('./public/img/'))
);

gulp.task('critical-css', function () {
    return gulp.src('./public/css/main.min.css')
        .pipe(criticalCss({
            out: '/critical.css',
            pages: [
                {
                    name: 'index',
                    url: '',
                },
                'hostels/ivanovo',
            ],
            baseUrl: 'http://nicehostel/',
            url: 'http://nicehostel',
            width: 1800,
            height: 900,
            //userAgent: 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'
        }))
        .pipe(cleanCSS({level: 2}))
        .pipe(gulp.dest('./public/css/'));
});

gulp.task('penthouse', () => {
    return penthouse({
        // penthouse-page options
        pages: [
            {
                name: 'index',
                url: '',
            },
            'hostels/ivanovo',
        ],
        baseUrl: 'http://nicehostel/',
        dest: './public/css/critical',
        // penthouse options
        css: './public/css/main.min.css',
        width: 1300,
        height: 900,
        strict: true,
    });
});

gulp.task('concat-critical', () => {
    return gulp.src('./public/css/critical/*.css')
        .pipe(concat('critical.min.css'))
        .pipe(cleanCSS({level: 2}))
        .pipe(gulp.dest('./public/css'));
});
