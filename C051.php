<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $num = explode(' ', trim(fgets(STDIN)));
    $flag = 0;
    for($i = 3; $i > 0; $i--){
        for($j = 0; $j < $i; $j++){
            if($num[$j] < $num[$j+1]){
                $flag = $num[$j];
                $num[$j] = $num[$j+1];
                $num[$j+1] = $flag;
            }
        }
    }
    
    echo ($num[0]+$num[1])*10 + ($num[2]+ $num[3]);
?>