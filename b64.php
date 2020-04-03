<!DOCTYPE html>
<html lang="esB">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>B64</title>
</head>

<body> 



  
<img src="data:image/jpg;base64,<?php $filename = $_GET["file"]; $newWidth = 200; $newHeight = 200; $imageInfo = getimagesize($filename); $image = imagecreatefrompng($filename); imagesavealpha($image, true); $newImg = imagecreatetruecolor($newWidth, $newHeight); imagealphablending($newImg, false); imagesavealpha($newImg,true); $transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127); imagefilledrectangle($newImg, 0, 0, $newWidth, $newHeight, $transparent); imagecopyresampled($newImg, $image, 0, 0, 0, 0, $newWidth, $newHeight,  $imageInfo[0], $imageInfo[1]);  echo base64_encode(file_get_contents("$newImg")) ?>" height="19" width="78" alt="base64" />

</body>
</html>
