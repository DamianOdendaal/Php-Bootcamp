#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   do_op.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:52:55 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:53:01 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

	if ($argc == 4)
	{
		if (trim($argv[2]) === "-")
			echo ($argv[1] - $argv[3])."\n";
		else if (trim($argv[2]) === "+")
			echo ($argv[1] + $argv[3])."\n";
		else if (trim($argv[2]) === "/")
			echo ($argv[1] / $argv[3])."\n";
		else if (trim($argv[2]) === "*")
			echo ($argv[1] * $argv[3])."\n";
		else if (trim($argv[2]) === "%")
			echo ($argv[1] % $argv[3])."\n";
	}
	else if ($argc < 4)
		echo "Invalid Arguments"."\n";

?>