<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es">
<head>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta lang="es">
<meta charset="utf-8">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="https://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <link href='img/zgtvlogo.png' rel='image_src'/>
   <meta name="title" content="ZAnime Full Animes Videos Peliculas Gratis">



  <meta property="og:url"           content="https://zanime.herokuapp.com/" />
  <meta property="og:type"          content="video" />
  <meta property="og:title"         content="ZAnime Full Animes" />
  <meta property=”og:site_name”     content="ZAnime" />
  <meta property="og:description"   content="ZAnime es una web es la que podras disfrutar del contenido completamente Gratis" />
  <meta property="og:image"         content="poster.png" />



   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


<link href='../../img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

<title>ZAnime Latino • Español • Castellano</title></head>

  <style>
  .textbox
  {
  font-size: 15px;
  }
 </style>

<style type="text/css">
#centro {
	width: 100%;
	position: absolute;
	top: 40%;
	left: 0;

}
    </style>
	
<style type="text/css">
	@media (min-width:801px)  { 
		#contenedor { 
			width: 450px; 
			height: 275px; 
		} 
	} 
</style>

<body oncontextmenu="return false">
  <div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content" align="center">
	
  <div style="width: 100%;">	
    
<script type="application/javascript">
    var ad_idzone = "3806703",
    ad_width = "468",
    ad_height = "60"
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3806703&output=noscript&type=468x60" width="468" height="60" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
	  
  </div>

  <ul data-role="listview" data-inset="true" data-filter="true" data-input="#myFilter">

    <script>
      if (window.XMLHttpRequest)
      {
  	  // Objeto para IE7+, Firefox, Chrome, Opera, Safari
  	  xmlhttp=new XMLHttpRequest();
      }else{
  	  // Objeto para IE6, IE5
  	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      // Abrimos el archivo que esta alojado en el servidor cd_catalog.xml
      xmlhttp.open("GET","list.xml?v=<?php $d=mt_rand(1,30); echo $d ; ?>",false);
      xmlhttp.send();

      // Obtenemos un objeto XMLDocument con el contenido del archivo xml del servidor
      xmlDoc=xmlhttp.responseXML;

      // Obtenemos todos los nodos denominados foro del archivo xml
      var foros=xmlDoc.getElementsByTagName("anime");

      // Hacemos un bucle por todos los elementos foro
      for(var i=0;i<foros.length;i++)
      {
  	  // Del elemento foro, obtenemos del primer elemento denominado "titulo"
  	  // el valor del primer elemento interno
  	  titulo=foros[i].getElementsByTagName("titulo")[0].childNodes[0].nodeValue
  	  cap=foros[i].getElementsByTagName("cap")[0].childNodes[0].nodeValue
  	  iurl=foros[i].getElementsByTagName("iurl")[0].childNodes[0].nodeValue

  	  document.write("<li>");
  		document.write("<a href='../../fembed/?id="+iurl+"&titulo="+titulo+"+"+cap+"' target='contenedor' onclick='window.location.href=");
      //document.write('"#"');
      document.write('"#');
      document.write(i);
      document.write('"');
      document.write("'>");

  		document.write("<img src='poster.png' class='ui-li-thumb'  height='100%'>");
      //document.write("<h2>");
      //document.write(i);
      //document.write("</h2>");
	  	document.write("<p><b>"+titulo+"</b></p>");

  		document.write("<p class='ui-li-aside'>"+cap+"</p>");
  		//document.write("<a href='../../fembed/?id="+iurl+"' class='html5lightbox' title='"+titulo+"' data-icon='star'>Video Previo</a>");
  		document.write("</a>");
  	  document.write("</li>");
      }
    </script>
  </ul>

  <div data-role="header" data-position="fixed" data-theme="b" align="center">
  <!--<img src="img/banner.png" width="979" height="140"> -->

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">




  <div data-role="collapsible" data-theme="b" data-content-theme="b">
    <h4>Click para abrir o cerrar el Reproductor</h4>
    <iframe width="320px" height="220px" src="" frameborder="0" allowfullscreen name="contenedor" id="contenedor"></iframe><br>

  <a href="https://goraps.com/fullpage.php?section=zgDLink&pub=516552&ga=g" target="_blank">Descargar</a><br>
	


    <script>

    var URLhash = window.location.hash;
    var cad = URLhash;
    var xd = cad.slice(1);


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            myFunction(this);
        }
    };
    xhttp.open("GET", "list.xml?v=<?php $d=mt_rand(1,30); echo $d ; ?>", true);
    xhttp.send();

    function myFunction(xml) {
        var xmlDoc = xml.responseXML;
        var x = xmlDoc.getElementsByTagName('iurl')[xd];
        var y = x.childNodes[0];
	    
	      var z = xmlDoc.getElementsByTagName('titulo')[xd];
	      var n = z.childNodes[0];

        var b = xmlDoc.getElementsByTagName('cap')[xd];
	      var c = b.childNodes[0];
	    
        document.getElementById("contenedor").src = '../../fembed/?id='+y.nodeValue+'&titulo='+n.nodeValue+' '+c.nodeValue;

        //y.nodeValue;
    }
    </script>





  </div>	    
  <!--    <a href="?a=estrenos" target="_parent"><button class="btn btn-danger navbar-btn">Animes en Estreno</button></a> -->
  </div>
  </nav>



  <!--
  <div data-role="navbar">
    <ul>
      <li><a href="http://video.zgrafic.com" target="_parent">Todos los animes</a></li>
      <li><a href="?a=estrenos" target="_parent">Animes en Estreno</a></li>
    </ul>
  </div>
  -->
 </div>

  <div data-role="footer" data-position="fixed" data-theme="b" align="center" >
	  
  <script type="application/javascript">
    var ad_idzone = "3806637",
    ad_width = "728",
    ad_height = "90"
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/ads.js"></script>
<noscript>
    <iframe src="https://syndication.exdynsrv.com/ads-iframe-display.php?idzone=3806637&output=noscript&type=728x90" width="728" height="90" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
</noscript>
	  
  </div>

  </div>

</body>
</html>
