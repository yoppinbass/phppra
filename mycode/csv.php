<?php

$file = fopen('hoge.csv', 'rb');
flock($file, LOCK_SH);

$data = [];
while ($line = fgetcsv($file, 1024, ',')) {
    $item = $line;
    $data[] = $item;
}

function show($data) {
    foreach ($data as $item) {
        echo "\n";
        foreach ($item as $i) {
            echo $i . "\t";
        }
    }
}
show($data);
flock($file, LOCK_UN);
fclose($file);
