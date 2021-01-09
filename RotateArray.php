<?php

function rotate($arr)
{
    foreach ($arr as $key => $ele) {
//        var_dump($key);

        foreach ($ele as $sm_key => $item) {
            $new_key = $sm_key+$key;
            if ($new_key > count($ele)) {
                $new_key = 3-($key+1);
            }
//            var_dump($new_key);
//            $ele[0] = $ele[count($ele)-0];
//            $ele[1] = $ele[count($ele)-2];
//            $ele[2] = $ele[count($ele)-1];
//
//            $ele[0] = $ele[count($ele)-1];
//            $ele[1] = $ele[count($ele)-2];
//            $ele[2] = $ele[count($ele)-0];




//            var_dump($ele);
        }



    }
}
$arr=[[1,2,3,4],[5,6,7,8],[9,0,1,2],[3,4,5,6]];
$new_arr= [];
foreach ($arr as $key=>$item){
    foreach ($)
    $new_arr[$key]

}


