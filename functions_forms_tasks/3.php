<html>
<header>
<!--    <meta charset="utf-8">-->
</header>
<body>
    <form enctype="multipart/form-data" method="POST" style="display: grid; padding: 50px">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" style="margin-bottom: 20px">
        <input type="file" name="myFile" accept="text/plain" style="margin-bottom: 20px">
<!--        <fieldset style="margin-bottom: 20px">-->
<!--            <label>Задайте максимальную длину слов</label>-->
            <input type="text" name="wordLength" placeholder="" style="display: block; width: 300px; margin-bottom: 20px">
<!--        </fieldset>-->
        <input type="submit">
    </form>
</body>
</html>
<?php
    header('Content-Type: text/html; charset=win-1251');
//    echo $_FILES['myFile']['name'] . "<br/>";
//    echo $_FILES['myFile']['type'] . "<br/>";
//    echo $_FILES['myFile']['tmp_name'] . "<br/>";
//    echo $_FILES['myFile']['error'] . "<br/>";
//    echo getcwd() . "<br/>";
//    if (!is_dir('.' . DIRECTORY_SEPARATOR . 'txt')){
//        mkdir('.' . DIRECTORY_SEPARATOR . 'txt', 0777, false);
//    }
    $arrayNewText = [];
    $myText = file_get_contents($_FILES['myFile']['tmp_name']);
    $wordLength = $_POST['wordLength'];
    $arrayMyText = explode(' ', $myText);

    if($wordLength != 0) {
        foreach ($arrayMyText as $word) {
            if (strlen($word) > $wordLength) {
                $word = '';
            }
            array_push($arrayNewText, $word);
        }
        $newText = implode(' ', $arrayNewText);
    } else {
        $newText = $myText;
    }

    echo "<pre>{$newText}</pre><br/>";

//    print_r(scandir('.' . DIRECTORY_SEPARATOR . 'txt'));

?>
