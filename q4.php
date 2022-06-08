<?php

function slouction($n_array)
{
    $len = count($n_array);
    if ($len <= 1) {
        return $n_array;
    }

    $key = $n_array[0];
    $right = [];
    $left = [];

    for ($i = 1; $i < $len; $i++) {
        if($key<$n_array[$i]){
            $right[]=$n_array[$i];
        }else{
            $left[]=$n_array[$i];
        }
    }

    $right = slouction($right);
    $left = slouction($left);

    $finish = array_merge($left,array($key), $right);
    return $finish;
}

$result = [77, 5, 5, 22, 13, 55, 97, 4, 796, 10, 1, 0, 9];
$finish = slouction($result);

print_r($finish);
