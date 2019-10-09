<?php

function	ft_split($string)

$index = 0;
$return_val = array();
$wordcount = str_word_count($string);
$str_pieces = explode(" ", $string);
while ($index < $wordcount)
{
	$return_val = $str_pieces[$index];
	$index++;
}
return $return_val;

?>
