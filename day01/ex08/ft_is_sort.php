<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_is_sort.php                                     :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/11 14:41:39 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/11 14:41:40 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

    function ft_is_sort($array)
    {
        $i = 0;
        if ($array[$i] < $array[$i + 1])
            while ($i < sizeof($array) - 1)
            {
                if ($array[$i] > $array[$i + 1])
                    return false;
                $i++;
            }
        $i = 0;
        if ($array[$i] > $array[$i + 1])
            while ($i > sizeof($array) - 1)
            {
                if ($array[$i] < $array[$i + 1])
                    return false;
                $i++;
            }
        return true;
    }
?>