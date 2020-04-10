<?php
error_reporting(0);

$id = $_GET["id"];

// M�dulo de extraxi�n para usar Video.js
$conexion = curl_init("https://xvideos.com/video". $id ."/");
//$conexion = curl_init("https://www.xvideos.com/video53326125/");
curl_setopt($conexion, CURLOPT_USERAGENT, "Mozilla/5.0 (Linux; U; Android 4.0.3; ko-kr; LG-L160L Build/IML74K) AppleWebkit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30");
curl_setopt($conexion, CURLOPT_HTTPHEADER, array("Accept-Language: es-es,en"));
curl_setopt($conexion, CURLOPT_POSTREDIR, 3);
curl_setopt($conexion, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($conexion, CURLOPT_RETURNTRANSFER, TRUE);
$respuesta = curl_exec($conexion);
curl_close($conexion);

$url3GP = "";
$urlMP4 = "";
$urlJPG = "";

if(preg_match('|html5player.setVideoUrlLow\(\'(.*?)\'\);|is', $respuesta, $low)){
    $url3GP = $low[1];
}
if(preg_match('|html5player.setVideoUrlHigh\(\'(.*?)\'\);|is', $respuesta, $high)){
    $urlMP4 = $high[1];
}
if(preg_match('|html5player.setThumbUrl\(\'(.*?)\'\);|is', $respuesta, $thumb)){
    $urlJPG = $thumb[1];
}

if($urlMP4 == ""){
    $urlMP4 = $url3GP;
}
?>






<!--
<div class="container">


<script src="https://content.jwplatform.com/libraries/DbXZPMBQ.js"></script>
<div id="myElement">Loading the player...</div>



<script type='text/javascript'>
var playerInstance = jwplayer('myElement')
playerInstance.setup({
    playlist: [{
        file: '<//?php echo($urlMP4) ?>',
        image: '<//?php echo ($urlJPG) ?>',
        tracks: [{
            file: '/assets/captions-en.vtt', 
            label: 'Latino',
            kind: 'captions',
            'default': true
        },{
            file: '/assets/captions-fr.vtt',
            kind: 'captions',
            label: 'Subtitulado'
        }]
    }]
});
</script>


</div>
-->


<a href="<?php echo($urlMP4) ?>" download="zgvid.mp4">Download Text</a>

<div id="myElement"></div>

    <script src="https://cdn.jwplayer.com/libraries/Yg6fcc1g.js"></script>
	<script>
		var playerInstance = jwplayer("myElement");
		playerInstance.setup({
			title: "<?php echo $titulo ?>",
			description: "http://zanime.herokuapp.com/",
			sources: <?php echo($urlMP4) ?>,
			image: "<?php echo ($urlJPG) ?>",
			width:"100%",
			height:"100%",
			autostart: "false",
			floating: "true",
		});
	</script>

<!--
<link href="/video/video-js.css" rel="stylesheet">
<script src="/video/ie8/videojs-ie8.min.js"></script>
<video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
poster="<//?php echo ($urlJPG); ?>" data-setup="{}">
<source src="<//?php echo($urlMP4); ?>" type='video/mp4'>
</video>
<script src="/video/video.js"></script>
-->
