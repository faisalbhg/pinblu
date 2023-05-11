var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass',function(){
	return gulp.src('public/scss/style.scss')
	.pipe(sass())
	.pipe(gulp.dest('public/css'))
});

