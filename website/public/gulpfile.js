        
const {
    src,
    dest,
    parallel,
    series,
    watch
} = require('gulp');

// Load plugins

const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const cssnano = require('gulp-cssnano');
const concat = require('gulp-concat');
const clean = require('gulp-clean');
const imagemin = require('gulp-imagemin');
const changed = require('gulp-changed');
const browsersync = require('browser-sync').create();

// Clean assets
function clear() {
    return src('assets/build/*', {
            read: false
        })
        .pipe(clean());
}

// JS function 
function js() {
    const source = 'assets/src/js/**/*.js';

    return src(source)
        .pipe(changed(source))
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(rename({
            extname: '.min.js'
            //extname: '.php'
        }))
        .pipe(dest('assets/build/js/'))
        .pipe(browsersync.stream());
}

// CSS function 
function copyFontAwsome() {
    return src('assets/src/scss/fontawesome/**/*') 
        .pipe(dest('assets/build/css/fontawesome'));
}



function css() {
    const sourceFiles = [
        'node_modules/bootstrap/scss/bootstrap.scss',
        'assets/src/scss/variable.scss',
        'assets/src/scss/header.scss',
        'assets/src/scss/footer.scss',
        'assets/src/scss/app.scss',
        'assets/src/scss/responsive.scss'
    ];
    return src(sourceFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concat('style.css'))
        .pipe(rename({
            extname: '.min.css'
        }))
        .pipe(cssnano())
        .pipe(dest('assets/build/css'))
        .pipe(browsersync.stream()); 
}





// Optimize images

function img() {
    return src('assets/src/img/**/*')
        .pipe(imagemin())
        .pipe(dest('assets/build/img'));
}


// Watch files

function watchFiles() {
    watch('assets/src/scss/**/*', css);
    watch('assets/src/js/**/*', js);
    watch('assets/src/img/**/*', img);
    watch('./**/*.html', browserSync.reload);
    watch('assets/src/scss/**/*', browserSync.reload);
}

// BrowserSync
function browserSync() {
    browsersync.init({
        server: {
            baseDir: '.'
        },
        watch: true,
        port: 3000
    });
}



// Tasks to define the execution of the functions simultaneously or in series

exports.watch = parallel(watchFiles);
exports.default = series(clear,copyFontAwsome,  parallel(js, css, img, browserSync));



    