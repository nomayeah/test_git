var gulp = require("gulp");
var plumber = require("gulp-plumber");
var autoprefixer = require("gulp-autoprefixer");

var sass = require("gulp-sass");

gulp.task("sass", function() {
  gulp.src("sass/**/*scss")
    .pipe(plumber())
    .pipe(sass({outputStyle : 'compact'}))
    .pipe(autoprefixer())
    .pipe(gulp.dest("../"));
});





var uglify = require("gulp-uglify");

gulp.task("js", function() {
  gulp.src(["js/**/*.js","!js/min/**/*.js"])
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest("../js"));
});





gulp.task("default", function() {
  gulp.watch(["js/**/*.js","!js/min/**/*.js"],["js"]);
  gulp.watch("sass/**/*.scss",["sass"]);
});