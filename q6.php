<?php

function twoSum($nums, $target)
{
    $len = count($nums);
    for ($i = 0; $i < $len; $i++) {
        for ($k = $i + 1; $k < $len; $k++) {
            $sum=$nums[$i]+$nums[$k];
            if($sum==$target){
                return [$i,$k];
            }
        }
    }
}


$n=[2,7,11,15];
$result=twoSum($n,9);
print_r($result);