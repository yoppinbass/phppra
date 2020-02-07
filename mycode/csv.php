<?php

function show($data) {
    foreach ($data as $item) {
        foreach ($item as $i) {
            echo $i . "\t";
        }
        echo "\n";
    }
}

function readcsv($file_name) {
    // ファイルの読み込み
    $file = fopen($file_name, 'rb');
    flock($file, LOCK_SH);

    // $data にcsvを格納
    $data = [];
    while ($line = fgetcsv($file, 1024, ',')) {
        $item = $line;
        $data[] = $item;
    }

    // ファイルを閉じる
    flock($file, LOCK_UN);
    fclose($file);
    return $data;
}
$data=readcsv('hoge.csv');
$config=readcsv('config.csv');
show($data);
show($config);
