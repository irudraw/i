if (navigator.appName == 'Netscape')
var lenguage = navigator.language;
else
var lenguage = navigator.browserLanguage;
if (lenguage.indexOf('en') > -1){
  document.getElementById("act").innerHTML = "If you do not load the new chapters Press (Ctrl + F5) or <a class='ui-btn' href='JavaScript: location.reload(true);'>Refresh</a>";
  document.getElementById("appID1").innerHTML = "This site does not store any video on its servers, or link directly, only share content stored on sites dedicated to file sharing for free. <a href='https://play.google.com/store/apps/details?id=zg.tv&hl=es'>Download Our App ZGTv!</a>";
  document.getElementById("descarg").innerHTML = "Download";
  document.getElementById("oculto").innerHTML = "Download";
  document.getElementById("gcomo").innerHTML = "Right click and Save link as...";
}
else if (lenguage.indexOf('es') > -1){
  document.getElementById("act").innerHTML = "En caso no cargue los nuevos capitulos Presionar (Ctrl+F5) o en <a class='ui-btn' href='JavaScript: location.reload(true);'>Actualizar</a>";
  document.getElementById("appID1").innerHTML = "Este sitio no almacena ning&uacute;n video en sus servidores, ni enlaza directamente, solo comparte contenido almacenado en sitios dedicados a compartir archivos de manera gratuita. <a href='https://play.google.com/store/apps/details?id=zg.tv&hl=es'>&#161;Descarga Nuestra App ZGTv!</a>";
  document.getElementById("descarg").innerHTML = "Descargar";
  document.getElementById("oculto").innerHTML = "Descargar";
  document.getElementById("gcomo").innerHTML = "Click Derecho y Guardar enlace como..";
}
else{
  document.getElementById("act").innerHTML = "If you do not load the new chapters Press (Ctrl + F5) or <a class='ui-btn' href='JavaScript: location.reload(true);'>Refresh</a>";
  document.getElementById("appID1").innerHTML = "This site does not store any video on its servers, or link directly, only share content stored on sites dedicated to file sharing for free. <a href='https://play.google.com/store/apps/details?id=zg.tv&hl=es'>Download Our App ZGTv!</a>";
  document.getElementById("descarg").innerHTML = "Download";
  document.getElementById("oculto").innerHTML = "Download";
  document.getElementById("gcomo").innerHTML = "Right click and Save link as...";
}




