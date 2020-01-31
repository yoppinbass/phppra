<?php
// +,-,*,/,%,**,++,--
// ++$x は代入前に加算、$x++ は代入後に加算

$n = 4;
print $n-- . "\n"; // 4
$n = 4;
print --$n . "\n"; // 3

// magical increment
$n = 'A';
print ++$n . "\n"; // B

// float
// bcadd, bcsub, bcmul, bcdiv, bccomp などを使って計算する
// array
// 連想配列の結合になる、存在していないキーを新たに追加するだけ
$a = [
    'Apple' => 'red',
    'Orange' => 'yellow',
    'Melon' => 'green',
];
$b = [
    'Apple' => 'green',
    'Grape' => 'purple',
    'Strawberry' => 'red',
];

$result = $a + $b;
print_r($result);

// 通常の配列にやっても意味ない => array_merge を使うべき
$a = [1, 2, 3];
$b = [4, 2, 6];
$result = $a + $b;
print_r($result);
$result = array_merge($a, $b);
print_r($result);
