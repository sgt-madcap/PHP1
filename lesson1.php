<?php
// --- //
$a = 5;
$b = '05';
var_dump($a == $b); // Почему true?
// Переменная $b приводится к integer (получаем целое число 5) и сравнивается со значением переменной $a //
var_dump((int)'012345'); // Почему 12345?
// строка приводится к integer (целое число), поэтому получается 12345 //
var_dump((float)123.0 === (int)123.0); // Почему false?
// сравнение происходит без приведения типов, поэтому float не может равняться int  //
var_dump((int)0 === (int)'hello, world'); // Почему true?
// строка преобразуется в число //
?>