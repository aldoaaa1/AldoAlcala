a = window.navigator; 
b = window.screen; 
 
// DATOS REGISTRADOS DEL VISITANTE 
var user = new Object(); 
user.screenWidth = b.width; 
user.screenHeight = b.height; 
user.language = a.language; 
user.vendor = a.vendor; 
user.userAgent = a.userAgent; 
user.ip = "<?= $_SERVER['REMOTE_ADDR'] ?>"; 
user.paginaActual = "<?= $_SERVER['PHP_SELF'] ?>"; 
 
// REGISTRO EN BASE DE DATOS 
$.post(baseUrl+'index.php/reg', {'user': user.user});