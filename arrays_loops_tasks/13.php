<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 14.07.2017
 * Time: 13:19
 */

for ($x = 1; $x <= 10; $x++) {
    echo "Таблица уножения на " . $x . "<br/>";
    for ($y = 1; $y <=10; $y++) {
        echo $x . " x " . $y . " = " . $x*$y . "<br/>";
    }
}
