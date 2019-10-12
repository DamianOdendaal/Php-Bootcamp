#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   one_more_time.php                                  :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 16:38:44 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 16:38:45 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

date_default_timezone_set('Europe/Paris');
function    week_days($str)
{
    $s = strtolower($str);
    if ($s == "lundi")
    return Monday;
    else if ($s == "mardi")
    return Tuesday;
    else if ($s == "mercredi")
    return Wednesday;
    else if ($s == "jeudi")
    return Thursday;
    else if ($s == "vendredi")
    return Friday;
    else if ($s == "samedi")
    return Saturday;
    else if ($s == "dimanche")
    return Sunday;
    else
    {
        echo "Wrong Format"."\n";
        exit(1);
    }
}

function    months($string)
{
    $str = strtolower($string);
    if ($str == "janvier")
    return January;
    else if ($str == "février")
    return February;
    else if ($str == "mars")
    return March;
    else if ($str == "avril")
    return April;
    else if ($str == "mai")
    return May;
    else if ($str == "juin")
    return June;
    else if ($str == "juillet")
    return July;
    else if ($str == "aout")
    return August;
    else if ($str == "septembre")
    return September;
    else if ($str == "octobre")
    return October;
    else if ($str == "novembre")
    return November;
    else if ($str == "décembre")
    return December;
    else
    {
        echo "Wrong Format"."\n";
        exit(1);
    }
}
if ($argc != 2)
    exit(1);
$str = explode(" ", $argv[1]);
if (!is_numeric($str[1]) || !is_numeric($str[3]))
        {
            echo "Wrong Format\n";
                exit(0);
        }
        if ((int)$str[1] > 31 || (int)$str[3] < 1000)
        {
            echo "Wrong Format\n";
            exit(0);
        }
        $time = explode(":", $str[4]);
        if (sizeof($time) != 3)
        {
            echo "Wrong Format\n";
            exit(0);
        }
        if (!is_numeric($time[0]) || !is_numeric($time[1]) || !is_numeric($time[2]) || strlen($time[0]) != 2 || strlen($time[1]) != 2 || strlen($time[2]) != 2 )
        {
            echo "Wrong Format\n";
            exit(0);
        }
        if ((int)$time[0] < 0 || (int)$time[1] < 0 || (int)$time[2] < 0)
        {
            echo "Wrong Format\n";
            exit(0);
        }
        $str[0] = week_days($str[0]);
        $str[2] = months($str[2]);
        echo strtotime(implode(" ", $str))."\n";
    
?>