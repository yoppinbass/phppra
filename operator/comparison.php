<?php
// 比較演算子
echo (7 == '7') . "\n"; // 値が等しいか
echo (7 === '7') . "\n"; // 型まで等しいか
echo (7 != '7') . "\n"; // 値が異なるか
echo (7 !== '7') . "\n"; // 値が等しいかつ型が同じを満たさない
echo (7 <> '7') . "\n"; // != といっしょ
echo (7 <=> '7') . "\n"; // 宇宙船演算子 左辺が小さい-1, 左辺が大きい+1
echo (7 ?? '7') . '(??)' . "\n"; // ?? どちらかがnullならもう片方を

// floatの比較
// 厳密な比較ができないのでεより小かで判断する
// 計算機イプシロン,丸め単位など名前がある
const EPSILON = 0.00001;
$x = 0.123456;
$y = 0.123455;
var_dump(abs($x - $y) < EPSILON); // bool(true)

// 配列の比較
/*
 * 1. 要素数で比較
 * 2. 同じキーをもつ要素同士で値の比較
 * 3. 1,2で等しいなら等しい
 */

// 条件演算子
$score = 75;
print $score >= 70 ? '合格' : '不合格';
echo "\n";

$message = '';
print $message ?: '空です'; // print $message ? $message : '空です'; に等しい
echo "\n";

$message = 'hoge';
print $message ?: '空です';
echo "\n";

// null合体演算子
// $msg = 'hello';
print $msg ?? 'no comment'; // no comment
// print isset($msg) ? $msg : 'no comment'; に等しい

// 結合の順序がわかりにくくなるのでカッコをつけるのがよいよ
