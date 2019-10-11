#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ssap.php                                           :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:41:16 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:41:17 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

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