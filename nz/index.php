<?php
require_once('core/inter.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR">
<head>
	<title>Player Rapidvideo</title>
	<meta charset="UTF-8"/>
	<!-- Chang URLs to wherever Video.js files will be hosted -->
	<link href="video-js/video-js.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="video-js/src/videojs.logobrand.css">

	
	<!-- video.js must be in the <head> for older IEs to work. -->
	<script type="text/javascript" src="video-js/video.js"></script>
  <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
<script>
videojs.options.flash.swf = "video-js/video-js.swf";
</script>
<style type="text/css">
.video-js {
    width: 100% !important;
    height: 100% !important;}
</style>
</head>
<body style="background:black; margin:0; border:0; padding:0;">
<video id="video" class="video-js vjs-default-skin vjs-big-play-centered vjs-controls-enabled" controls 
data-setup='{ "techOrder": ["html5"], "controls": true, "autoplay": false, "customControlsOnMobile": true }'>
<source src="./get-movie.php?c=<?=FJCrypter::crypt('https://nontongo.win/api-mega/get.php?id='.$_GET['v'].'')?>" type='video/mp4'/>
</video>
<script  type="text/javascript" src="video-js/src/videojs.logobrand.js"></script>
<script type="text/javascript">
// save a reference to the video element
video = document.querySelector('video'),
// save a reference to the video.js player for that element
player = videojs(video);
// initialize the plugin with some custom options:
player.logobrand({
//height: "32px",
//width: "32px",
image: "", //logo
destination: "" //link
});
</script>
</body>
</html>
