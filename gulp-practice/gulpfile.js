var gulp = require('gulp'),
    watch = require('gulp-watch'),
    less = require('gulp-less'),
    plumber = require('gulp-plumber'),
    notify = require('gulp-notify');

gulp.task('default', function () {
    watch('./static/less/*.less', function () {
        console.log('Recompiling less');

        return gulp.src('./static/less/app.less')
            .pipe(plumber())
            .pipe(less())
            .pipe(gulp.dest('./static/css'))
            .pipe(notify({
                    title: 'GULP Less',
                    subtitle: 'Completed compiling less',
                    message: 'Completed compiling less'
                }
            ));
	});
});