<?php
$myfile = fopen("testfile.txt", "w");
$txt = "Latitude: " . $_GET["lat"] . ", Longitude: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>



