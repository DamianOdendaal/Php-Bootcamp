#!/usr/bin/php
<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   magnifying_glass.php                               :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 19:56:02 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 19:56:03 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */
$file = fopen('source.txt', 'rb');
$newfile = fopen('target.txt', 'wb');
while(($line = fgets($file)) !== false) {
 if(strpos($line, 'user.php') !== false) {
   fputs($newfile, $line);
 }
}
fclose($newfile);
fclose($file);

?>