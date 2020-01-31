<?php

// 配列
$data = [1, 2, 3, 4, 5]; // ブラケット構文(>PHP5.4)
$animals = array('dog', 'cat', 'bird', 'lion'); // PHP5.3以前の書き方

print $data[1];
echo "\n";
$animals[] = 'rat'; // pushできる
echo "\n";
print_r($animals);

// 連想配列
$dict = [
    'apple' => 'pomme',
    'I' => 'je',
    'dog' => 'chien',
    'cat' => 'chat',
];
print $dict['apple'] . "\n"; 

// 多次元配列
// ふつうにやればいいのでパス

/*
 * じつは配列も連想配列も同じように実装されている
 * 配列は、整数値をキーにした連想配列に過ぎない
 * なので、けっこう無理なこともやれる
 */
