#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   rostring.php                                       :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:41:28 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:41:29 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

    $trimed = trim($argv[1]);
    $pieces = preg_split("/\s+/", $trimed);
    $index = 1;
    if ($argc == 1)
        exit(1);
    while ($index < sizeof($pieces))
        echo trim($pieces[$index++])." ";
    echo trim($pieces[0])."\n"; 
?>