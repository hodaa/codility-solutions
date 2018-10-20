<?php

$binary=decbin(15);
echo  preg_match('/10{1,}1/', $binary);