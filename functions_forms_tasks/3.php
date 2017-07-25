<form method="POST">
    <input type="file" name="myText">
    <input type="submit">
</form>
<?php
    $myFile = $_FILES['myText'];
    echo "файл загружен";
?>
