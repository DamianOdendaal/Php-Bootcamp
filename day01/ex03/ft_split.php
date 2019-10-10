<?php

/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_split.php                                       :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/10 08:41:26 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/10 08:41:27 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */


function	ft_split($string){
	
	$index = 0;
	$index1 = 0;
	$return_val = array();
	$wordcount = str_word_count($string);
	$str_pieces = explode(" ", $string);
	while ($index < $wordcount)
	{
		$return_val[$index1] = $str_pieces[$index];
		$index++;
		$index1++;
	}
	sort($return_val);
	return $return_val;
}
?>
