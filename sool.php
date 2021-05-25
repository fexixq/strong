<?php
    $str = "abcdefg";
    // 返回原字符串
    echo "$str" . "\n";
    // 将字符串从下标 0 开始 向后截取 3 位数
    echo substr($str,0,3) . "\n";
    // 将字符串从下标 3 开始 向后截取 3 位数
    echo substr($str,3,3) . "\n";
    // 将字符串从下标 1 开始截取 后面是剩下所有的字符串
    echo substr($str,1) . "\n";
    // 将字符串倒着截取 截取从后向前数第一个字符串
    echo substr($str,-1) . "\n";
    // 将字符串倒着截取 截取从后边倒数第三个字符串开始截取 然后截取到最后
    echo substr($str,-3) . "\n";
    //kfjgdfkgkd