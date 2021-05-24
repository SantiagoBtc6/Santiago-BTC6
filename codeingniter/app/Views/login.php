
< html >
< cabeza >
< estilo >
html {
  color de fondo: # 56baed;
}
cuerpo {
  familia de fuentes: "Poppins" , sans-serif;
  altura: 100vh;
}
.wrapper {
  pantalla: flex;
  alinear-elementos: centro;
  flex-direction: columna; 
  justificar-contenido: centro;
  ancho: 100%;
  altura mínima: 100%;
  relleno: 20px;
}
#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  radio del borde: 10px 10px 10px 10px;
  fondo: #fff;
  relleno: 30px;
  ancho: 90%;
  ancho máximo: 450px;
  posición: relativa;
  relleno: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba ( 0,0,0, 0,3 ) ;
  sombra de cuadro: 0 30px 60px 0 rgba ( 0,0,0, 0.3 ) ;
  alineación de texto: centro;
}
 
entrada [ tipo = botón ] , entrada [ tipo = enviar ] , entrada [ tipo = restablecer ] {  
  color de fondo: # 56baed;
  borde: ninguno;
  color blanco;
  relleno: 15px 80px;
  alineación de texto: centro;
  decoración de texto: ninguna;
  pantalla: bloque en línea;
  transformación de texto: mayúsculas;
  tamaño de fuente: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba ( 95,186,233, 0.4 ) ;
  caja de sombra: 0 10px 30px 0 rgba ( 95,186,233, 0.4 ) ;
  -webkit-border-radius: 5px 5px 5px 5px;
  radio del borde: 5px 5px 5px 5px;
  margen: 5px 20px 40px 20px;
  -webkit-transition: todos los 0.3 s de entrada y salida;
  -moz-transición: todos los 0.3 s de entrada y salida;
  -ms-transición: todos los 0,3 s de entrada y salida;
  -o-transición: todos los 0,3 s de entrada y salida;
  transición: todos los 0,3 s de entrada y salida;
}
 
input [ type = text ] { 
  color de fondo: # f6f6f6;
  borde: ninguno;
  color: # 0d0d0d;
  relleno: 15px 32px;
  alineación de texto: centro;
  decoración de texto: ninguna;
  pantalla: bloque en línea;
  tamaño de fuente: 16px;
  margen: 5px;
  ancho: 85%;
  borde: 2px sólido # f6f6f6;
  -webkit-transition: todos los 0.5 s de entrada y salida;
  -moz-transición: todos los 0,5 s de entrada y salida;
  -ms-transición: todos los 0,5 s de entrada y salida;
  -o-transición: todos los 0,5 s de entrada y salida;
  transición: todos los 0,5 s de entrada y salida;
  -webkit-border-radius: 5px 5px 5px 5px;
  radio del borde: 5px 5px 5px 5px;
}
entrada [ tipo = contraseña ] { 
  color de fondo: # f6f6f6;
  borde: ninguno;
  color: # 0d0d0d;
  relleno: 15px 32px;
  alineación de texto: centro;
  decoración de texto: ninguna;
  pantalla: bloque en línea;
  tamaño de fuente: 16px;
  margen: 5px;
  ancho: 85%;
  borde: 2px sólido # f6f6f6;
  -webkit-transition: todos los 0.5 s de entrada y salida;
  -moz-transición: todos los 0,5 s de entrada y salida;
  -ms-transición: todos los 0,5 s de entrada y salida;
  -o-transición: todos los 0,5 s de entrada y salida;
  transición: todos los 0,5 s de entrada y salida;
  -webkit-border-radius: 5px 5px 5px 5px;
  radio del borde: 5px 5px 5px 5px;
}
input [ type = text ] : focus {
  color de fondo: #fff;
  borde inferior: 2px sólido # 5fbae9;
}
input [ type = text ] : placeholder {
  color: #cccccc;
}
.fadeInDown {
  -webkit-nombre-animación: fadeInDown;
  nombre-animación: fadeInDown;
  -webkit-animation-duration: 1s;
  duración de la animación: 1 s;
  -webkit-animation-fill-mode: ambos;
  modo de relleno de animación: ambos;
}
@ -webkit-keyframes fadeInDown {
  0% {
    opacidad: 0;
    -webkit-transform: translate3d ( 0, -100%, 0 ) ;
    transformar: translate3d ( 0, -100%, 0 ) ;
  }
  100% {
    opacidad: 1;
    -webkit-transform: ninguno;
    transformar: ninguno;
  }
}
 
} 
< / estilo >
< / cabeza >
< cuerpo >
< link href = "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel = "stylesheet" id = "bootstrap-css" >
< link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
< div class = "envoltura fadeInDown" >
  < div id = "formContent" >
      < div class = "fadeIn first" >
    < i class = "fa fa-sign-in" aria-hidden = "true" style = 'font-size: 50px' > < / i >
    < / div >
    < span style = 'color: rojo; tamaño de fuente: 15px;' > < =? Sesión ( 'msg' ) ;? > < / span >
     < form method = "post"   action = "<? = site_url ('/ login')?>" > 
      < input type = "text" id = "user_id"   name = "user_id" placeholder = "Nombre de usuario" >
      < input type = "contraseña" id = "contraseña"   nombre = "contraseña" placeholder = "Contraseña" >
      < input type = "submit" value = "Iniciar sesión" >
    < / formulario >    
    < div id = "formFooter" >       
    < / div >
  < / div >
< / div >
< / cuerpo >
< / html >
