<?php

$file = fopen('hoge.csv', 'rb');
flock($file, LOCK_SH);

$data = [];
while ($line = fgetcsv($file, 1024, ',')) {
    $item = $line;
    $data[] = $item;
}

print_r($data);
flock($file, LOCK_UN);
fclose($file);
