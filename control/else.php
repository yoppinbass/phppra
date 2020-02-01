<?php
// goto 書けるけど使うな
for($i = 1;$i < 10; $i++) {
    for($j = 1;$j < 10; $j++) {
        $result = $i * $j;
        if ($result > 40) { goto end; }
        print "{$result} ;";
    }
    print "\n";
}

end:
// スクリプトブロックと固定テンプレート
/*
 * <?php for ($i = 1; $i < 6; $i++) { ?>
 *  <p> hello, world </p>
 * <?php } ?>
 *  この記述でHTML要素を繰り返せる
 *  ようするにHTML固定テンプレートはprint命令が実行されているようなもの
 */ 

// 制御構文には別の記法(:)があるが、{}がベター
// 誰かのコードに出てきたときに読めればよい
