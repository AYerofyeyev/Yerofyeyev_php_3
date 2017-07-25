<form method="post">
    <textarea name = "myText"></textarea>
    <input type="submit">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 18.07.2017
 * Time: 11:56
 */

function top3($a){
    $arrCounts = $keys =[];
    $arr = explode(' ', $a);
    foreach ($arr as $value) {
        array_push($arrCounts, strlen($value));
    }
        arsort($arrCounts);
        $keys = array_keys($arrCounts);
    echo $arr[$keys[0]] . "<br />";
    echo $arr[$keys[1]] . "<br />";
    echo $arr[$keys[2]] . "<br />";
}

$myText = $_POST['myText'];

top3($myText);
