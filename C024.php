<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $n = trim(fgets(STDIN));
    
    $s_1 = 0;
    $s_2 = 0;
    
    $cnt = 0;
    
    while($cnt < $n){
        $op = explode(' ', trim(fgets(STDIN)));
        if($op[0] == 'SET'){
            if($op[1] == '1'){
                $s_1 = $op[2];
                $cnt++;
            } elseif($op[1] == '2'){
                $s_2 = $op[2];
                $cnt++;
            }
        } elseif($op[0] == 'ADD'){
            $s_2 = $s_1 + $op[1];
            $cnt++;
        } elseif($op[0] == 'SUB'){
            $s_2 = $s_1 - $op[1];
            $cnt++;
        }
    }
    echo $s_1, ' ', $s_2;
?>