<?php

$a = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
$b = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

// ==========交集 start=============
$c = [];
foreach ($b as $row) {
    if (in_array($row, $a)) {
        $finish_result[] = $row;
    } else {
        continue;
    }
}
echo "交集:";
print_r($finish_result);
echo "\n";
// ==========交集 end=============

// ==========差集 start=============
$c = [];
foreach ($a as $key => $value) {
    if (in_array($value, $b)) {
        unset($a[$key]);
    } else {
        continue;
    }
}
$d = $a;
echo "差集:";
print_r($d);
echo "\n";
// ==========交集 end=============

// ==========聯集 start=============
$a = [77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9];
foreach ($b as $row) {
    if (in_array($row, $a)) {
        continue;
    } else {
        $a[] = $row;
    }
}
$e = $a;
echo "聯集:";
print_r($e);
echo "\n";
// ==========聯集 end=============
