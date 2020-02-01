<?php
// break
// continue
// => いつものやつなので大丈夫そう
// ループのネストとbreak/continue
for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j < 10; $j++) {
        $result = $i * $j;
        // if ($result > 40) { break; } // 内側のループしか抜けない
        if ($result > 40) { break 2; } // 外側のループまで抜ける
        print "{$result} ;";
    }
    print "\n";
}

print "\n";
// switch文でのcontinue命令
for ($i = 1;$i < 4; $i++) {
    $result = 0;
    switch ($i) {
        case 1;
        case 3;
            // $i = 1, 3のときのみ変数$resultを計算
            $result = $i * $i;
        break;
        case 2;
            // continue; // 内部ではswitchもループの一種なのでswitchから抜けるだけ
            continue 2;
    }
    print "{$i}の2乗は{$result}です\n";
}
