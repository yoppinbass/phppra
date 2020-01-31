<?php

// bool literal
echo true . "\n"; // 大文字小文字を区別しないのでtrue,TRUEでもよい
/* 次を自動的にfalseとみなす
 * - 空文字列、文字列の0
 * - 整数リテラルの0
 * - 浮動小数点数リテラルの0.0
 * - 要素数が0の空の配列
 * - null(未定義値)
 */

// int literal
echo 0b11 . "\n"; // 2
echo 0b1111 . "\n"; // 2
echo 0777 . "\n"; // 8
echo 0600 . "\n"; // 8
echo 0xFF . "\n"; // 16

// float literal
// string literal
// "string" と 'string' の違い
$drink = 'コーラ';
echo "$drink\t$drink\t$drink" . "\n"; // 変数を展開し、エスケープを認識する
echo '$drink\t$drink\t$drink' . "\n"; // しない

// here document
$str = 'PHP (PHP:Hypertext Preprocessor) ';
// 'EOD'とするとエスケープや変数の展開をしなくなる
$msg = <<< EOD
{$str}は、サーバサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎固めしましょう。<br />
"Let's start, everyone!!"\n
EOD; // <br /> はWebサーバでちゃんとつかえば機能するらしい
print $msg;

// null
/*
 * nullになるとき
 * - 変数に値が代入されていない
 * - 変数に明示的にnullを代入されたとき
 * - unset命令で変数の内容が破棄されたとき
 */
$n1 = null;
echo $n1;
