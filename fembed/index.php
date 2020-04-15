<?php
    error_reporting(0);
    include "func.php";

$id = $_GET["id"];
$titulo = $_GET["titulo"];

	$fblink = 'https://www.facebook.com/'.$id.'/';
	$fdata = facebookstream($fblink);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>ZAnime <?php echo $titulo ?> </title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
<script type="application/javascript">
    var ad_idzone = "3806717",
    ad_popup_fallback = true,
    ad_popup_force = false,
    ad_chrome_enabled = true,
    ad_new_tab = false,
    ad_frequency_period = 60,
    ad_frequency_count = 3,
    ad_trigger_method = 3;
</script>
<script type="application/javascript" src="https://a.exdynsrv.com/popunder1000.js"></script>
		
		
<!-- PopMyAds.com Popunder Code for zanime.herokuapp.com -->
 
<script type="text/javascript" data-cfasync="false">
var pmauid = '57538';
var pmawid = '55982';
var fq = '0';
</script>
<script type="text/javascript" data-cfasync="false" src="https://cdn.popmyads.com/pma.js"></script>
 
<!-- PopMyAds.com Popunder Code End -->
		

<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <style>
            html,body{
            	height: 100%;
            	width: 100%;
            	margin: 0;
            }
	    </style>
	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>


<div id="myElement"></div>
<div align="center"> <font size="2" color="white"><?php echo $titulo ?></font> </div>


    <script src="https://cdn.jwplayer.com/libraries/Yg6fcc1g.js"></script>
	<script>
		var playerInstance = jwplayer("myElement");
		playerInstance.setup({
			title: "<?php echo $titulo ?>",
			description: "http://zanime.herokuapp.com/",
			sources: <?php echo $fdata ?>,
			image: "",
			width:"100%",
			height:"100%",
			autostart: "false",
			floating: "true",
		});
	</script>
    </body>
</html>
