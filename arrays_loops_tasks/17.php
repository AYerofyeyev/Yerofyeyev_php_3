<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 17.07.2017
 * Time: 11:05
 */

$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = 'July';

foreach ($arr as $value) {
    if ($value == $month) {
        echo "<strong>{$value}</strong>, ";
    } else {
        echo $value . ", ";
    }
}