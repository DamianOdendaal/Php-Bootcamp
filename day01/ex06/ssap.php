<?php

$index = 0; $start = 2;
if (strpos($argv[1], " ") !== false)
    $var = explode(" ",trim(preg_replace("/\s+/", " ", $argv[1])));
else
    $var = array($argv[1]);
while ($start < $argc)
{
    if (strpos($argv[$start], " ") !== false)
        $var = array_merge($var, explode(" ", trim(preg_replace("/\s+/", " ", $argv[$start++]))));
    else
        array_push($var, $argv[$start++]);
}
sort($var);
while ($index < sizeof($var))
    echo $var[$index++]."\n";
?>
