<?php

function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    }

    if ($pow == 0) {
        return 1;
    }

    if ($pow < 0) {
        return power( 1/$val, -$pow);
    }

    return $val * power($val, $pow-1);

    echo power(10, 5);
}