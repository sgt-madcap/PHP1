<?php

$a = 1;
$b = -3;

if($a > 0 && $b > 0) {
    echo $a = $b;
}
if ($a < 0 && $b < 0) {
    echo $a * $b;
}
if (($a < 0 && $b > 0) || ($a > 0 && $b < 0)) {
    echo $a + $b;
}

