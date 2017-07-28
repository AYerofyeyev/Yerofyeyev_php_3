<form enctype="multipart/form-data" method="POST" style="display: grid; padding: 50px">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" style="margin-bottom: 20px">
    <input type="file" name="myFile" accept="text/plain" style="margin-bottom: 20px">
    <input type="text" name="wordLength" placeholder="Задайте максимальную длину слов" style="display: block; width: 300px; margin-bottom: 20px">
    <input type="submit">
</form>
<?php
    echo $_FILES['myFile']['name'] . "<br/>";
    echo $_FILES['myFile']['type'] . "<br/>";
    echo $_FILES['myFile']['tmp_name'] . "<br/>";
    echo $_FILES['myFile']['error'] . "<br/>";
    echo getcwd() . "<br/>";
    if (!is_dir('./img')){
        mkdir('./img', 0777, false);
    }
    move_uploaded_file($_FILES['myFile']['tmp_name'], './img/');
    print_r(scandir('./img'));

?>
