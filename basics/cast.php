<?php
// 暗黙的な変換

// 明示的な変換
var_dump((int)1530.95);
var_dump((int)-1530.95);
var_dump((int)true);
var_dump((string)true);
var_dump((int)false);
var_dump((string)false);
var_dump((array)108);
var_dump((unset)1530.95);

// 文字列->数値の型キャスト
var_dump((int)'0b11'); // 0になってしまう(これはbを読んだ段階で処理を中止してしまうから)
var_dump(bindec('0b11')); // 3になる bin, oct, hex, dec
