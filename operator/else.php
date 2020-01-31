<?php
// 文字列の連結
$x = 'hello, ';
$y = 'world.';
print $x . $y . "\n";

// リテラルに使うときは注意
$x = 0xFF;
$y = 1.5E2;
print $x . $y . "\n"; // 255150 250と150が連結される

$x = '0xFF'; // ちゃんと文字列にする
$y = '1.5E2';
print $x . $y . "\n"; // 255150 250と150が連結される

// 実行演算子
$result = `date`;
print $result . "\n";
