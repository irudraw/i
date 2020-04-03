<?php
$filename = $_GET["file"];

<img src="data:image/jpg;base64,<?php echo base64_encode(file_get_contents("$filename")) ?>" height="19" width="78" alt="base64" />
?>