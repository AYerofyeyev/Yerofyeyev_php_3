<form method="get">
    <input type="text" name="arrayLength" placeholder="Задайте количество чисел">
    <input type="submit">
</form>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.07.2017
 * Time: 21:36
 */

$arr = $arrEven = [];
$result = 1;

$arrayLength = $_GET['arrayLength'];

echo "Исходный массив: ";
for($i = 0; $i < $arrayLength; $i++){
    array_push($arr, rand(1, 100));
    echo $arr[$i] . " ";
}

foreach ($arr as $key => $value) {
    if ($value > 0){
        if (($key%2) ==0) {
            $result *= $value;
        } else {
            array_push($arrEven, $value);
        }
    }
}
echo "<br/>Произведение выбранных элементов массива равно " . $result . "<br/>";
echo "Элементы массива с непарными индексами: ";
print_r($arrEven);
?>