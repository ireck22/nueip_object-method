<?php
$rest = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$even = [];
$even_sum = 0;
$odd_number = [];
$odd_number_sum = 0;

$len = count($rest);

for ($i = 0; $i < $len; $i++) {
    if ($rest[$i] % 2 == 0) {
        $even_sum += $rest[$i];
        $even[] = $rest[$i];
    } else {
        $odd_number_sum += $rest[$i];
        $odd_number[] = $rest[$i];
    }
}

echo "偶數和: ";
print_r($even_sum);
echo "\n奇數和: ";
print_r($odd_number_sum);
echo "\n偶數列:"; 
print_r($even);
echo "\n奇數列: ";
print_r($odd_number);
