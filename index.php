<?php
//header('Content-Type: text/html; charset=utf-8');
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
   <meta name="title" content="ZAnime Full Animes en idioma latino, español, castellano ">
   <meta name="keywords" content="video, animes, series, latino, español, castellano, idioma, audio, online, descargar, gratis, zanime">

   <script src="live.js"></script>

  <meta property="og:url"           content="https://zanime.herokuapp.com/"/>
  <meta property="og:type"          content="video" />
  <meta property="og:title"         content="ZAnime Full Animes" />
  <meta property=”og:site_name”     content="ZAnime" />
  <meta property="og:description"   content="ZAnime es una web es la que podras disfrutar del contenido completamente Gratis, animes en audio Español | Latino | Castellano" />
  <meta property="og:image"         content="img/zgtvlogo.png" />


   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
						     
	
						     
						     
						     

   <!--inicioscrpgalleria-->
<script type="text/javascript" src="html5lightbox.js"></script>
<script type="text/javascript">
function LightboxGroupLink(id) {
var href = document.getElementById(id).getAttribute('href');
html5Lightbox.showItem(href);
}
</script>
<!--finscrpgalleria-->

<!--
   <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1898526567030464',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
-->

<link href='img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

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

<body oncontextmenu="return false">
<div data-role="page" data-theme="b"  class="my-page" id="demo-page">
<div  role="main" class="ui-content" align="center">
	
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
  xmlhttp.open("GET","anime/xml.php",false);
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
  	//code=foros[i].getElementsByTagName("code")[0].childNodes[0].nodeValue
  	pvideo=foros[i].getElementsByTagName("pvideo")[0].childNodes[0].nodeValue

  	document.write("<li>");
  		document.write("<a href='anime/"+titulo+"/#0' target='_blank'>");
  		document.write("<img loading='lazy' src='anime/"+titulo+"/poster.png' class='ui-li-thumb'  height='100%'>");
	  	//document.write("<img src='tumb.php?file=anime/"+titulo+"/poster.png&w=250' class='ui-li-thumb'  height='100%'>");
  		//document.write("<h2>"+titulo+"</h2>");
	  	document.write("<p><b>"+titulo+"</b></p>");
  		//document.write("<p>Code: "+code+"</p>");
  		document.write("<p class='ui-li-aside'>ZAnime</p>");
  		document.write("<a href='https://youtube.com/embed/"+pvideo+"??autoplay=1&wmode=transparent&rel=0&html5=1' class='html5lightbox' title='"+titulo+"' data-icon='video'>Opening</a>");
  		document.write("</a>");
  	document.write("</li>");
  }
  </script>
  </ul>
	
	
  <div data-role="header" data-position="fixed" data-theme="b" align="center">
	  
	  
<div data-role="header" data-position="fixed" data-theme="b" style="overflow:hidden;">
<h1>ZAnime</h1>
<a href="#" data-icon="star" class="ui-btn-left" target="_blank">Info</a>
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=D7NEQBYF6DXG8&source=url" data-icon="star" class="ui-btn-right" target="_blank">Donar</a>
</div>

  <!--
    <div data-role="navbar">


<div data-role="footer">
    <div data-role="navbar" data-iconpos="left">
        <ul>
            <li><a href="#" data-icon="grid">Summary</a></li>
            <li><a href="#" data-icon="star" class="ui-btn-active">Favs</a></li>
            <li><a href="#" data-icon="gear">Setup</a></li>
        </ul>
    </div>
</div>

    </div>
  -->
   </div>



  

  


</div>



<div data-role="footer" data-position="fixed" data-theme="b" align="center" >
<table width="350" border="0" align="center">
  <tr>
    <td>
<form class="ui-filterable" >
<input id="myFilter" data-type="search" data-theme="a">
</form>
    </td>
<!--    <td>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://zanime.herokuapp.com/" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" href="#" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://zanime.herokuapp.com/&amp;src=sdkpreparse','','top=300,left=300,width=300,height=300')"><img src="img/fb_share.png" /></a></div>


    </td>-->
  </tr>
</table>
	
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
</div>

	
	<link rel="stylesheet" href="anti/anti.css"/>
	<link rel="stylesheet" href="anti/animate.min.css"/>

	<?php
	error_reporting(0);
	include "anti.php";
	?>
	
<script type="text/javascript">
    var wid = '553916';
    var uid = '204720';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
	
</body>
</html>
