<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 17.07.2017
 * Time: 12:45
 */

$arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

$day = 'monday';

foreach ($arr as $value) {
    if ($value == $day) {
        echo "<span style = 'font-style: italic'>{$value}</span>, ";
    } else {
        echo $value . ", ";
    }
}