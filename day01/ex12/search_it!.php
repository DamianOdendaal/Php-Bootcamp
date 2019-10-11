#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   search_it!.php                                     :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:59:30 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:59:34 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

    $i = 1; $index = 2;
    $array = array(); $found = false;
    if ($argc < 3)
        exit(1);
    $array[] = $argv[1];
    while ($index < $argc)
        $array = array_merge($array, explode(":", $argv[$index++]));
    while ($i < sizeof($array))
    {
        if ($array[0] == $array[$i])
        {
            $found = true;
            $var = $array[$i + 1]."\n";
        }
        $i++;
    }
    if ($found == false)
        exit(1);
    echo $var;
?>