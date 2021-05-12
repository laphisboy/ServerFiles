<?php


exec("python python/create_text.py");
$test = fopen("python/files/test.txt", "r") or die("Unable to open file!");
echo fread($test, filesize("python/files/test.txt"));
fclose($test);

?>

