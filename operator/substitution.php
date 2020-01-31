<?php
// substitution
$a = 'hello, ';
$a .= 'world.'; // 文字列を連結して代入
echo $a . "\n"; 

// referrence
// 値渡し
$x = 1;
$y = $x;
$x = 5;
echo "値渡し: " . "x: " . $x . " y: " . $y . "\n";
// 参照渡し
$x = 1;
$y = &$x;
$x = 5;
echo "参照渡し: " . "x: " . $x . " y: " . $y . "\n";

// オブジェクトは参照渡ししかできない
