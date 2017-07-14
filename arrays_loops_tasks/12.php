<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 14.07.2017
 * Time: 13:10
 */
$n = 1000;
$num = 0;

while ($n >= 50) {
    $n /= 2;
    $num++;
}

echo "Результат: " . $n . " за " . $num . " итераций.";