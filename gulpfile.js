var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefix = require('gulp-autoprefixer'),
    sass = require("gulp-sass"),
    sourcemap = require('gulp-sourcemaps')
    cssmin = require('gulp-cssnano'),
    rename = require('gulp-rename');

    var prefixerOptions = {
        browsers: ["last 2 versions"]
      };

gulp.task("style", function(){
    return gulp
        .src("./Temp/style.scss")
        .pipe(sourcemap.init())
        .pipe(
            sass({ includePaths: require('node-normalize-scss').includePaths }).on(
                "error",
                sass.logError
            )
        )
        .pipe(prefix(prefixerOptions))
        .on("error", function(errorInfo){
            console.log(errorInfo.toString());
            this.emit("end");
        })
        .pipe(rename("newstyle.css"))
        .pipe(gulp.dest("./new_css/"))
        .pipe(cssmin())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest("./new_css"));
});

gulp.task("watch", function(){
    gulp.watch("./Temp/**/*.scss", gulp.series('style'));
});