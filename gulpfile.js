const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', () => {
    return gulp.src('./resources/sass/frontend/project/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('frontend.css'))
        .pipe(gulp.dest('./public/css/'));
});

gulp.task('watch-styles', () => {
    gulp.watch('')
});
