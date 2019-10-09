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

echo "Enter a number:";
while (!feof(STDIN)
{
	$num = fopen("php://stdin", "r");
    $read = fgets($num);
	$read = trim($read);
    if (is_numeric($read))
    {
        if ($read % 2 == 0)
            echo "The number $read is even";
        else
            echo "The number $read is odd";
    }
    else
        echo "'$read' is not a number";
	echo "Enter a number"
}
?>
