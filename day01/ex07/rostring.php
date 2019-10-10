<?php
    $pieces = explode(" ", $argv[1]);
    $index = 1;
    while ($index < $argc)
        echo $pieces[$index++]." ";
    echo $pieces[0]."\n"; 

?>