header('Content-Type: image/png');
<img src="data:image/png;base64,<?php $filename = $_GET["v"]; echo base64_encode(file_get_contents("$filename")) ?>" height="200" width="200" alt="base64" />
