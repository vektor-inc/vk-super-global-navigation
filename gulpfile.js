//プラグイン名
const pluginName = ' vk-super-global-navigation';

// モジュールをロード
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const uglify = require('gulp-uglify');

// CSS をビルド
gulp.task('build:css', (done) => {
	gulp.src(`./src/_scss/*.scss`)
		.pipe(
			sass({ outputStyle: 'compressed' }).on('error', sass.logError)
		)
		.pipe(gulp.dest(`./build/css/`));
	done();
});

// JS をビルド
gulp.task('build:js', (done) => {
	gulp.src(`./src/js/*.js`)
		.pipe(uglify())
		.pipe(gulp.dest(`./build/js/`));
	done();
});

// 一気にビルド
gulp.task('build', gulp.series('build:css', 'build:js')); 

// ディストリビューションを作成
gulp.task('dist', function (done) {
	const files = gulp.src(
	  [
		'./build/**',
		'./vendor/**',
		'./readme.txt',
		'./vk-super-global-navigation.php',
		'./vksgn-template.php',
		'!./node_mudules/**',
		'!./tests/**',
	  ], {
		base: './'
	  }
	)
	files.pipe(gulp.dest(`dist/${pluginName}`));
	done();
  });
