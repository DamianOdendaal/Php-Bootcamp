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
    }

    function    months($string)
    {
        $str = strtolower($string);
        if ($str == "lundi")
            return Monday;
        else if ($str == "mardi")
            return Tuesday;
        else if ($str == "mercredi")
            return Wednesday;
        else if ($str == "jeudi")
            return Thursday;
        else if ($str == "vendredi")
            return Friday;
        else if ($str == "samedi")
            return Saturday;
        else if ($str == "dimanche")
            return Sunday;
    }
?>