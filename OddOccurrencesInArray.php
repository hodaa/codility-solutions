<?php

//function solution($A)
//{
//    $unique = array_count_values($A);
//    foreach ($unique as $key => $item) {
//        if ($item % 2== 1) {
//            return  $key;
//        }
//    }
//}

function solution($A)
{
    $result = 0;
    foreach ($A as $number) {
        $result = $result ^ $number;
    }
    return $result;
}

echo solution([9, 3, 3, 8, 9]);
