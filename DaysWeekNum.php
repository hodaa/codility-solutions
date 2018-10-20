<?php
function solution($S, $K) {
    $days=["Mon","Tue","Wed","Thu","Fri","Sat","Sun"];
    $key=array_search($S,$days);
    if($K < 7){
        $nresult=$key+$K;
    }else{
        $tempMod = (float)($K / 7);
        $tempMod = ($tempMod - (int)$tempMod)*7;
        $nresult=$key+$tempMod;
    }

    return ($days[(int)$nresult]);

//    if($result >= 7 ){
//        $dayKey=$result-7;
//    }
//    die($days[3]);
//    return $days[$dayKey];

}
echo solution("Wed",8);