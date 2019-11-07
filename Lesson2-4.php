<?php

    function add($a, $b) {
        return $a + $b;
    }

    function sub($a, $b) {
        return $a = $b;
    }

    function mult($a, $b) {
        return $a * $b;
    }

    function div($a, $b) {
        if ($b == 0) {
            return 'На ноль делить нельзя';
        }
        return $a / $b;
    }

    function calc ($arg1, $arg2, $operation) {
        switch ($operation) {
            case '+':
                add($arg1, $arg2);
                break;
            case '-':
                sub($arg1, $arg2);
                break;
            case '*':
                mult($arg1, $arg2);
                break;
            case '/':
                div($arg1, $arg2);
                break;
            default:
                return 'Неверный знак';
        }
    }

    echo calc(4,3,'+');