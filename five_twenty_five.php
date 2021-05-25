<?php
    $arr1 = [11,22,33,44,55,66,77,88,99];

    /* forEach($arr1 as $k=>$v){
        echo '$k=' . $k . '++++++++++$v=' . $v . "\n";
    }; */

    $length = count($arr1);
    for($i=0;$i<$length;$i++){
        echo $arr1[$i] . '>>>>>>' . 'i=' . $i . "\n";
    };