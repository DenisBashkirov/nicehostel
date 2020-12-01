const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');


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

gulp.task('build-css', () => {
    return gulp.src('./public/css/*.css')
        .pipe(concat('main.css'))
        .pipe(cleanCSS({level: 2}))
        .pipe(autoprefixer({
            cascade: true
        }))
        .pipe(gulp.dest('./public/css'));
});
