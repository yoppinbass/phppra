<?php
// if
$x = 10;
if ($x === 10) {
    print 'variable $x is 10.' . "\n";
} else {
    print 'variable $x is not 10.' . "\n";
}

$x = 35;
if ($x > 20) {
    print 'variable $x is greater than 20.' . "\n";
} elseif ($x > 10) {
    print 'variable $x is greater than  10.' . "\n";
} else {
    print 'variable $x is smaller than  10.' . "\n";
}
/*
 * ネストできるができるだけしないほうがいい
 * 1行の処理なら[]を省略できるがそれほどいいことはない
 */

// switch
$rank = '甲';
switch ($rank) {
case '甲':
    print 'very good' . "\n";
    break;
case '乙':
    print 'good' . "\n";
    break;
case '丙':
    print 'not good' . "\n";
    break;
default:
    print '???' . "\n";
    break;
}
/*
 * switch の判定は「==」なので思わぬ挙動をすることがある
 * たとえばcase 0で判定すると文字列をいれたときに'string' == 0
 * 文字列は比較するとき数値に変換され0になる -> 実行されてしまう
