<?php
// while
echo "while: ";
$i = 1;
while ($i < 6) {
    print "{$i} th loop\t";
    $i++;
}
echo "\n";
// while do
echo "while do: ";
$i = 1;
do {
    print "{$i} th loop\t";
    $i++;
} while ($i < 6);
echo "\n";

// for
echo "for: ";
for ($i = 1; $i < 6; $i++) {
    print "{$i} th loop\t";
}
echo "\n";
/*
 * for (;;) {} で無限ループ
 */

// comma operator
echo "comma: ";
for ($i = 1; $i < 6; print "{$i} th loop\t", $i++);

echo "\ncomma: \n";
for ($i = 1, $j = 1; $result = $i * $j, $i < 6; $i++, $j++) {
    print "{$i} x {$j} = {$result}\n";
}

// foreach
echo "foreach: \n";
$data = [2, 3, 5, 7, 11];
foreach ($data as $value) {
    print "{$value} is prime\n";
}

$dict = ['a' => 'A', 'b' => 'B', 'c' => 'C'];
foreach ($dict as $key => $value) {
    print "{$key}:{$value}\n";
}

// 値変数の参照渡し
$data = [2, 3, 5, 7, 11];
foreach ($data as &$value) {
    $value = 'New' . $value;
}
print_r($data); // => もとの配列の値を変更できる
