<?php
function solution($N)
{
    $binary = decbin($N);

    if (preg_match('/10{1,}1+/', $binary)) {
        $binary = substr($binary, strpos($binary, '1'), strripos($binary, '1')+1);
        $strings = explode('1', $binary);
        return max(array_map('strlen', $strings));
    }
    return 0;
}


echo solution(328);
