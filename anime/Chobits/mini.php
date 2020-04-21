<?php
header('Content-Type: image/png');

$filename = $_GET["f"];
$width = $_GET["w"];


$file_info = getimagesize($filename); 
$ratio = $file_info[0] / $file_info[1]; 

$newWidth = $width; 
$newHeight = round($newWidth / $ratio); 

$imageInfo = getimagesize($filename);

$image = imagecreatefrompng($filename);
imagesavealpha($image, true);

$newImg = imagecreatetruecolor($newWidth, $newHeight);
imagealphablending($newImg, false);
imagesavealpha($newImg,true);
$transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
imagefilledrectangle($newImg, 0, 0, $newWidth, $newHeight, $transparent);
imagecopyresampled($newImg, $image, 0, 0, 0, 0, $newWidth, $newHeight,  $imageInfo[0], $imageInfo[1]);

imagepng($newImg);

?>
