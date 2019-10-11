#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ssap2.php                                          :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:52:45 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:52:46 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

$i = 2; $k = 0;
if ($argc == 1)
  exit(1);
if (strpos($argv[1], ' ') !== false)
   $str = explode(' ', trim(preg_replace('/\s+/', ' ', $argv[1])));
else
   $str = array($argv[1]);
while ($i < $argc)
{
   if (strpos($argv[$i], ' ') !== false)
       $str = array_merge($str, explode(' ', trim(preg_replace('/\s+/', ' ', $argv[$i++]))));
   else
       array_push($str, $argv[$i++]);
}
$words = array();
$numbers = array();
$other = array();
while ($k < sizeof($str))
{
   if (is_numeric($str[$k]))
       array_push($numbers, $str[$k]);
   else if (ctype_alpha($str[$k]))
       array_push($words, $str[$k]);
   else
       array_push($other, $str[$k]);
   $k++;
}
natcasesort($words);
rsort($numbers);
sort($other);
foreach ($words as $elem)
  echo $elem. "\n";
foreach ($numbers as $elem)
  echo $elem. "\n";
foreach ($other as $elem)
  echo $elem. "\n";
?>