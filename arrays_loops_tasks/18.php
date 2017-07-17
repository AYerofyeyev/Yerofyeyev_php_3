<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 17.07.2017
 * Time: 11:23
 */

$arr = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];

foreach ($arr as $key => $value) {
    switch ($key) {
        case 5:
            echo "<strong>{$value}<strong>, ";
            break;
        case 6:
            echo "<strong>{$value}<strong>";
            break;
        default:
            echo $value . ", ";
    }
}