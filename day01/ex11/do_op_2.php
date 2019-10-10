<?php
	if ($argc == 2)
	{
		$piece = explode(" ", $argv[1]);
		if ($piece[1] === "-")
			echo ($piece[0] - $piece[2])."\n";
		else if ($piece[1] === "+")
			echo ($piece[0] + $piece[2])."\n";
		else if ($piece[1] === "/")
			echo ($piece[0] / $piece[2])."\n";
		else if ($piece[1] === "*")
			echo ($piece[0] * $piece[2])."\n";
		else if ($piece[1] === "%")
			echo ($piece[0] % $piece[2])."\n";
		else if (!is_numeric($piece[0]) || !is_numeric($piece[2]))
			echo "Syntax Error"."\n";
	}
	else if ($argc == 1)
		echo "Invalid Parameters"."\n";
?>

