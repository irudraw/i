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
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <link href='img/zgtvlogo.png' rel='image_src'/>
   <meta name="title" content="ZGTv. Full Animes Videos Peliculas Gratis">



  <meta property="og:url"           content=https://zanime.herokuapp.com/" />
  <meta property="og:type"          content="ZGTv." />
  <meta property="og:title"         content="ZGTv. Full Animes" />
  <meta property="og:description"   content="ZGTv. es una web es la que podras disfrutar del contenido completamente Gratis" />
  <meta property="og:image"         content="img/zgtvlogo.png" />


   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   <script src="http://zgrafic.com/list/code/tawk.js"></script>
						     
						     
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>


   <!--inicioscrpgalleria-->
<script type="text/javascript" src="html5lightbox.js"></script>
<script type="text/javascript">
function LightboxGroupLink(id) {
var href = document.getElementById(id).getAttribute('href');
html5Lightbox.showItem(href);
}
</script>
<!--finscrpgalleria-->


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


<link href='img/zgtvlogo.png' rel='shortcut icon' type='image/png'/>

<title>ZGTv</title></head>

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

  <div data-role="header" data-position="fixed" data-theme="b" align="center">
  <!--<img src="img/banner.png" width="979" height="140"> -->

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- <a class="navbar-brand" style="color:#00CC00">ZGTv.</a> -->
      </div>
    <!--   <ul class="nav navbar-nav">
        <li class="active"><a href="http://video.zgrafic.com" target="_parent">Todos los Animes</a></li>

        <li><a href="?a=estrenos" target="_parent">Animes en Estreno</a></li>
       <li><a href="#">Link</a></li>

      </ul>  -->
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



  <div  role="main" class="ui-content" align="center">

  <ul data-role="listview" data-inset="true" data-filter="true" data-input="#myFilter">
<div id="seccionRecargar"></div>

<script type="text/javascript">
	$(document).ready(function(){
		setInterval(
				function(){
					$('#seccionRecargar').load('index_listview.php');
				},5000
			);
	});
</script>


  </ul>


</div>



<div data-role="footer" data-position="fixed" data-theme="b" align="center" >
<table width="350" border="0" align="center">
  <tr>
    <td>
<form class="ui-filterable" >
<input id="myFilter" data-type="search" data-theme="a">
</form>
    </td>
    <td>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="https://zanime.herokuapp.com/" data-layout="button" data-size="large" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" href="#" onClick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://zanime.herokuapp.com/&amp;src=sdkpreparse','','top=300,left=300,width=300,height=300')"><img src="img/fb_share.png" /></a></div>


    </td>
  </tr>
</table>
<script type="text/javascript" src="//uprimp.com/bnr.php?section=zgtv728x90&pub=516552&format=728x90&ga=g"></script>
<noscript><a href="https://yllix.com/publishers/516552" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub/728x90.png" style="border:none;margin:0;padding:0;vertical-align:baseline;" alt="ylliX - Online Advertising Network" /></a></noscript>
</div>

</div>

</body>
</html>
