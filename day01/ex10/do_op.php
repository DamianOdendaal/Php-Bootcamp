<?php
	if ($argc == 4)
	{
		if ($argv[2] === "-")
			echo ($argv[1] - $argv[3])."\n";
		else if ($argv[2] === "+")
			echo ($argv[1] + $argv[3])."\n";
		else if ($argv[2] === "/")
			echo ($argv[1] / $argv[3])."\n";
		else if ($argv[2] === "*")
			echo ($argv[1] * $argv[3])."\n";
		else if ($argv[2] === "%")
			echo ($argv[1] % $argv[3])."\n";
	}
	else if ($argc < 4)
		echo "Please complete the sum you wish to do as arguments"."\n";

?>
