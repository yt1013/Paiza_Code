<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $n = trim(fgets(STDIN));
    for($j=0; $j<$n; $j++){
        $a = trim(fgets(STDIN));
        $ans = 0;
        for($i=1; $i <= $a/2; $i++){
            if($a%$i == 0){
                $ans += $i;
            }
        }
        
        if($ans == $a){
            echo 'perfect', PHP_EOL;
        }
        elseif(abs($ans - $a) == 1){
            echo 'nearly', PHP_EOL;
        }
        else{
            echo 'neither', PHP_EOL;
        }
    }
?>