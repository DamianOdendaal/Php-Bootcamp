<?php

$index1 = 0; $i = 0;
$index = 0; $start = 2;
if (strpos($argv[1], " ") !== false)
{
	if (ctype_alpha($argv[1]) === true)
    	$alph = explode(" ",trim(preg_replace("/\s+/", " ", $argv[1])));
	else if (is_numeric($argv[1]) === TRUE)
    	$num = explode(" ",trim(preg_replace("/\s+/", " ", $argv[1])));
	else if (preg_match('/'.preg_quote('^\'£$%^&*()}{@#~?><,@|-=-_+-¬', '/').'/', $argv[1]) === 1)
    	$oth = explode(" ",trim(preg_replace("/\s+/", " ", $argv[1])));
}
else
    $var = array($argv[1]);
while ($start < $argc)
{
    if (strpos($argv[$start], " ") !== false)
	{
		if (ctype_alpha($argv[$start]) === true)
			$alph = array_merge($alph, $argv[$start]);
		else if (is_numeric($argv[$start]) === TRUE)
			$num = array_merge($num, $argv[$start]);
		else if (preg_match('/'.preg_quote('^\'£$%^&*()}{@#~?><,@|-=-_+-¬', '/').'/', $argv[$start]) === 1)
			$oth = array_merge($oth, $argv[$start]);
		$start++;

	}
    else
        array_push($var, $argv[$start++]);
}
sort($var);
sort($alph);
sort($num);
sort($oth);
while ($index < sizeof($alph))
    echo $alph[$index++]."\n";
while ($index < sizeof($num))
    echo $num[$index++]."\n";
while ($index < sizeof($oth))
    echo $oth[$index++]."\n";
while ($index < sizeof($var))
    echo $var[$index++]."\n";

?>
