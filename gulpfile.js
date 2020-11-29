const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');


gulp.task('sass-framework', () => {
    return gulp.src('./src/sass/framework/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('framework.css'))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass-project', () => {
    return gulp.src('./src/sass/project/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('project.css'))
        .pipe(gulp.dest('./css'));
});
