<?PHP
/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   cookie_crisp.php                                   :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: dodendaa <dodendaa@student.42.fr>          +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/10/13 10:42:32 by dodendaa          #+#    #+#             */
/*   Updated: 2019/10/13 10:42:33 by dodendaa         ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

if ($_GET['action'] == "set")
    setcookie($_GET['name'], $_GET['value'], time() + 86400);
if ($_GET['action'] == "get")
    echo $_COOKIE[$_GET['name']];
if ($_GET['action'] == "del")
    setcookie($_GET['name'], $_GET['value'], time() - 86400);
?>