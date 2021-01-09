<?php
//binary search using php.

function searchMe($arr, $needle)
{
    $start_index =0;
    $end_index= count($arr);
    $medIndex = 0;
    if (empty($arr)) {
        return false;
    }

    while ($needle !==$arr[$medIndex]) {
        $medIndex = floor(($start_index+$end_index)/2);

        if (!isset($arr[$medIndex]) || ($start_index === $end_index && $arr[$start_index] != $needle)) {
            return  false;
        }
        if ($needle > $arr[$medIndex]) {
            $start_index = $medIndex+1; //3
        } elseif ($needle < $arr[$medIndex]) {
            $end_index = $medIndex-1; // 0,3
        }
    }
    return $medIndex;
}

//$res = searchMe([1,2,3,4,5,6,7,8], 5);
$res = searchMe([1], 4);
var_dump($res);
