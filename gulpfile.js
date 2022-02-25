var gulp = require("gulp");
var replace = require("gulp-replace");

gulp.task('dist', function (done) {
	const files = gulp.src(
	  [
		'./**/*.php',
		'./**/*.txt',
		'./**/*.md',
		'./**/*.css',
		'./**/*.scss',
		'./**/*.png',
		'./inc/**',
		'./assets/**',
		'./icons/**',
		'./languages/**',
		"./vendor/**",
		"!./.vscode/**",
		"!./bin/**",
		"!./dist/**",
		"!./node_modules/**/*.*",
		"!./tests/**",
	  ], {
		base: './'
	  }
	)
	files.pipe(gulp.dest("dist/vk-super-global-navigation"));
	done();
  });
