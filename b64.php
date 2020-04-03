<!DOCTYPE html>
<html lang="esB">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>B64</title>
</head>

<body>
  
<img src="data:image/jpg;base64,<?php $filename = $_GET["file"]; echo base64_encode(file_get_contents("$filename")) ?>" height="19" width="78" alt="base64" />

</body>
</html>
