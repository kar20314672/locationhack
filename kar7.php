<?php
$myfile = fopen("testfile.txt", "w");
$txt = "Latitude".$_GET[""]."Long".$_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>


