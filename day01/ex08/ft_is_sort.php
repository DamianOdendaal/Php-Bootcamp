<?php
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