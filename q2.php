<?php
$str = "人易科技:上 機 測 驗 - 演算法";
// $r1 = preg_replace(
//     '/[\x{0020}\x{0020}-\x{7e}]/ue',
//     '($unicode=char2Unicode(\'\0\')) == 0x0020 ? unicode2Char（0x3000） : (($code=$unicode+0xfee0) > 256 ? unicode2Char($code) : chr($code))',
//     $str
// );
// echo $r1;

$r2=preg_replace('/\s(?=)/', '', $str);;
// echo $r2;

$r2_1=explode("-",$r2);
$r2_2=$r2_1[0]." - ".$r2_1[1];
echo $r2_2."\n";

$r3=explode(":",$str);
$r3_1=explode("-",$r3[1]);
echo $r3_1[0];