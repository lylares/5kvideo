<?php

print_r(get_random2(8));
//随机数
function get_random2($length = 4) {
    $min = pow(10 , ($length - 1));
    $max = pow(10, $length) - 1;
    return mt_rand($min, $max);
}
