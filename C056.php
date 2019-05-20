<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    fscanf(STDIN, '%d %d', $n, $m);
    for($i=0; $i<$n; $i++){
        fscanf(STDIN, '%d %d', $p, $a);
        if($p-(5*$a) >= 0){
            if($p-(5*$a) >= $m){
                echo $i+1, PHP_EOL;
            }
        } elseif($p-(5*$a) < 0){
            if($m == 0){
                echo $i+1, PHP_EOL;
            }
        }
    }
?>