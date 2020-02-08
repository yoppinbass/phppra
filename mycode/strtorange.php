<?php
// 日本語で指定した金額範囲を配列に格納する
function strtorange ($string) {
    $array = split_by_tilde($string);
    $array = array_map('strtoint', $array);
    var_dump($array);
    return 0;
}

function split_by_tilde($string) {
    $string = str_replace('〜', '~', $string);
    $array = explode('~', $string);
    return $array;
}

function strtoint($string) {
    $string = mb_convert_kana($string, 'n');
    $string = str_replace('万', '0000', $string);
    $string = str_replace('千', '000', $string);
    return (int)($string);
}
strtorange('３万円〜５万円');
strtorange('3万円〜5万円');
strtorange('3万円~5万円');

strtoint('３万円'); //3
strtoint('3万円'); // 3
strtoint('３００００'); //3
strtoint('30000'); // 30000

