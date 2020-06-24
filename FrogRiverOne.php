<?php
function solution($X, $A)
{
    for ($i = 0; $i < count($A); $i++) {
        if (!isset($position_achieved[$A[$i]])) {
            $X--;   // reduce X by one position is achieved
            $position_achieved[$A[$i]] = true;
        }
        if (!$X) {
            return $i;
        }
    }
    return -1;
}

//function solution($X, $A)
//{
//    $check_array = array();
//    for ($i=0; $i < count($A); $i++) {
//        $check_array[$i] = 0;
//    }
//
//    for ($i=0; $i < count($A); $i++) {
//        if ($check_array[$A[$i]]==0) {
//            $check_array[$A[$i]]=1;
//            $X--;
//        }
//
//        if ($X==0) {
//            return $i;
//        }
//    }
//
//    return -1;
//}


//function solution($X, $A)
//{
//    $A= array_unique($A);
//    asort($A);
//    $min=0;
//
//
//    var_dump($A);
//    if (count($A)< $X) {
//        return -1;
//    }
//
//
//    foreach ($A as $key => $item) {
//        if ($key > $min) {
//            $min = $key;
//        }
//        if ($item == $X) {
//            return $min;
//        }
//    }
//}

//echo solution(2, [2, 2, 2, 2, 2]);// -1
//echo solution(2, [1, 1,1, 1, 1]);// -1
//echo solution(5, [1,3,1,4,2,3,5,4]); //6
echo solution(3, [2, 1,1, 1, 2, 3,7,8,9,10]); //4
//1,3,2,7,8,9,10
//echo solution(5, [3]); //-1
