<?php

$myfile = fopen("webdictionary.txt", "a+") 
or die("Unable to open file!");

echo fread($myfile,filesize("webdictionary.txt"));
$txt = "wtlab\n";

fwrite($myfile, $txt);

fclose($myfile);

?>