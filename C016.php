<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input_line = trim(fgets(STDIN));
    for($i=0; $i<strlen($input_line); $i++){
        if($input_line[$i] == 'A'){
            $input_line[$i] = '4';
        }
        elseif($input_line[$i] == 'E'){
            $input_line[$i] = '3';
        }
        elseif($input_line[$i] == 'G'){
            $input_line[$i] = '6';
        }
        elseif($input_line[$i] == 'I'){
            $input_line[$i] = '1';
        }
        elseif($input_line[$i] == 'O'){
            $input_line[$i] = '0';
        }
        elseif($input_line[$i] == 'S'){
            $input_line[$i] = '5';
        }
        elseif($input_line[$i] == 'Z'){
            $input_line[$i] = '2';
        }
    }
    echo $input_line;
?>