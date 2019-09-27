<?php
if($_SERVER['HTTP_X_REQUESTED_WITH'] == "zg.tv" OR $_SERVER['HTTP_X_REQUESTED_WITH'] == "com.zgtv.zgrafic"){
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
   <link rel="stylesheet" href="http://demos.jquerymobile.com/1.4.5/listview-grid/listview-grid.css">
   <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
   <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   <script src="http://zgrafic.com/list/code/tawk.js"></script>
</head>

<!--
<body oncontextmenu="return false" >
-->

<body>
<div data-role="page" data-theme="b"  class="my-page" id="demo-page"><div  role="main" class="ui-content"><ul data-role="listview" data-filter="true" data-input="#myFilter" data-inset="true">

<?php
//Archivos ignorados
$list_ignore = array ('.','..');
$handle=opendir(".");
$msg = "No hay poyectos";
while ($file = readdir($handle)) {
 if (is_dir($file) && !in_array($file,$list_ignore)) {    
  $msg = '';
   echo "<li><a href='$file' target='_parent'><img src='$file/poster.png' class='ui-li-thumb' alt='Test image' width='100%' height='100%' /><h2>".$file."</h2><p>Serie</p></a></li>";
   }
 }
closedir($handle);
echo $msg;
?>



</ul></div>

<div data-role="header" data-position="fixed" data-theme="b">
<form class="ui-filterable" >
<input id="myFilter" data-type="search" data-theme="a">
</form>

</div>

</div>

</body>
</html>

<?php
}
else{
?>

<script src="http://zgrafic.com/list/code/android.js"></script>

<?php
}
?>


