<form method="post">
    <textarea name="text1"></textarea>
    <textarea name="text2"></textarea>
    <input type="submit">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: ean
 * Date: 18.07.2017
 * Time: 10:53
 */

function getCommonWords($a, $b) {
    $arr1 = explode(' ', $a);
    print_r($arr1);
    $arr2 = explode(' ', $b);
    print_r($arr2);
    $arrResult = [];
    echo "<br/><br/>";
    foreach ($arr1 as $value1){
        echo $value1 . " 1 <br/>";
        foreach ($arr2 as $value2){
            echo $value2 . " 2 <br/>";
            if($value2 == $value1){
                array_push($arrResult, $value1);
            }
        }
    }
    print_r($arrResult);
    return $arrResult;
}

$text1 = $_POST['text1'];
$text2 = $_POST['text2'];

getCommonWords($text1, $text2);
?>