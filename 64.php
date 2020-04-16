<?php $filename = $_GET["v"]; echo base64_encode(file_get_contents("$filename")) ?>
