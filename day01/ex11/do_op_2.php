#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   do_op_2.php                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:55:08 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:55:14 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

	if ($argc != 2)
	{
	   echo "Incorrect Parameters"."\n";
	   exit(0);
	}
	$str = str_replace(' ', '', $argv[1]);
	if (strpos($str, '-') !== false)
	{
	   $array = explode('-', $str);
	   if (!is_numeric($array[0]) || !is_numeric($array[1]))
	   {
		   echo "Syntax Error\n";
		   exit(0);
	   }
	   echo ($array[0] - $array[1])."\n";
	}
	else if (strpos($str, '+') !== false)
	{
	   $array = explode('+', $str);
	   if (!is_numeric($array[0]) || !is_numeric($array[1]))
	   {
		   echo "Syntax Error\n";
		   exit(0);
	   }
	   echo ($array[0] + $array[1])."\n";
	}
	else if (strpos($str, '*') !== false)
	{
	   $array = explode('*', $str);
	   if (!is_numeric($array[0]) || !is_numeric($array[1]))
	   {
		   echo "Syntax Error\n";
		   exit(0);
	   }
	   echo ($array[0] * $array[1])."\n";
	}
	else if (strpos($str, '%') !== false)
	{
	   $array = explode('%', $str);
	   if (!is_numeric($array[0]) || !is_numeric($array[1]))
	   {
		   echo "Syntax Error\n";
		   exit(0);
	   }
	   echo ($array[0] % $array[1])."\n";
	}
	else if (strpos($str, '/') !== false)
	{
	   $array = explode('/', $str);
	   if (!is_numeric($array[0]) || !is_numeric($array[1]))
	   {
		   echo "Syntax Error\n";
		   exit(0);
	   }
	   echo ($array[0] / $array[1])."\n";
	}
	else
	   echo "Syntax Error\n";
?>