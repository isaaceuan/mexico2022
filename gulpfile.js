const { series, src, dest, watch} = require("gulp");

//CSS
const sass = require('gulp-sass')(require("sass"))
const plumber = require('gulp-plumber');

//Imagenes
const webp = require('gulp-webp')

//escucha todos los archivos dentro de un directorio con una extensión especifíca
const paths = {
  scss: 'src/scss/**/*.scss'
}

function compilarSASS(){
  return src(paths.scss) //Identificar el archivo .SCSS a compilar
  .pipe(plumber())
  .pipe(sass()) //compilarlo
  .pipe(dest("./css")); //Almacenarlo
}

function versionWebp(done){

  const opciones = {
    quality: 50
  };

  src("src/img/**/*.{png, jpg}")
  .pipe( webp (opciones) )
  .pipe( dest("./img") )
  done()
}

function watchArchivos(){
  watch("./src/scss/**/*.scss", compilarSASS);
}

exports.compilarSASS = compilarSASS;
exports.watchArchivos = watchArchivos;
exports.versionWebp = versionWebp;
// exports.default = series( imagenes, versionwebp, watchArchivos);
// exports.default = series(versionwebp, watchArchivos);
exports.default = series(watchArchivos, versionWebp);