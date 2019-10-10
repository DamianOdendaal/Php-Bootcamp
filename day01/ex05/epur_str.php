<?php
$string = trim(preg_replace("/\s+/", " ", $argv[1]));
echo $string."\n";
?>