<?php
function solution($N){
    $binary = decbin($N);
    $length = 0;
    if (preg_match('/10{1,}1+/', $binary)) {
        while (strpos(substr($binary, 1), '1') !== false) {
            $firstOne = strpos($binary, '1');
            $part = substr($binary, ($firstOne + 1), strpos(substr($binary, 1), '1'));
            $thisLength = strlen($part);
            $binary = substr($binary, $thisLength+1);
            if ($thisLength > $length) {
                $length = $thisLength;
            }
        }
    }

    return $length;
}


echo solution(12);