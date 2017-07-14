<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 12.07.2017
 * Time: 16:46
 */

$arr = [2, 5, 9, 15, 0, 4];

foreach ($arr as $value) {
    if ($value > 3 && $value < 10) {
        echo $value . ", ";
    }
}