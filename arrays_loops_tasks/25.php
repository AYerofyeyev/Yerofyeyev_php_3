<form method="get">
    <input type="text" name="arrayLength" placeholder="Задайте количество чисел">
    <input type="submit">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.07.2017
 * Time: 19:19
 */
$arr = [];
$arrayLength = $_GET['arrayLength'];
echo "Исходный массив: ";
for($i = 0; $i < $arrayLength; $i++){
    array_push($arr, rand(1, 100));
    echo $arr[$i] . " ";
}

$arrSorted = $arr;
asort($arrSorted);

$keys = array_keys($arrSorted);

$temp = $arr[$keys[0]];
$arr[$keys[0]] = $arr[$keys[($arrayLength-1)]];
$arr[$keys[($arrayLength-1)]] = $temp;

echo "<br/> Искомый массив : ";
foreach($arr as $value) {
    echo $value . " ";
}

?>