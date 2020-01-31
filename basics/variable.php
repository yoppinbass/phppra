<?php
// 1行コメント
/*
 * 複数行のコメント
 */

// 大文字と小文字の区別をしない(変数名では区別するので注意)
print "hello\n";
PrInT "hello\n";

// 変数宣言
$msg = 'こんにちは'; //型を宣言する必要がない
echo $msg . "\n"; // '\n' ではエスケープできない

/*
 * 命名規則
 * 1. $で始めること
 * 2. 最初の文字は英字orアンダーバー
 * 3. 2文字目以降は英数字orアンダーバー
 * 4. 大文字と小文字の区別がある
 */

// 可変変数
$x = 'title';
$title = "PHP:Hypertext Preprocessor\n";
print $$x; // 'PHP:Hypertext Preprocessor'が出力される
print ${$x}; // better
