<?php
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   oddeven.php                                        :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/09 16:10:42 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/09 16:10:43 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

echo "Enter a number: ";
while ($var = fgets(STDIN))
{
    $var = trim($var);
    if (is_numeric($var))
    {
        if ($var % 2 == 0)
            echo "The number $var is even\n";
        else
            echo "The number $var is odd\n";
    }
    else
        echo "'$var' is not a number\n";
	echo "Enter a number: ";
}
?>
