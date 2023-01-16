<form action="" method="post">
    <input type="hidden" name="value1" value="1">
    <input type="submit" name="submit1" value="Plat1">
</form>

<form action="" method="post">
    <input type="hidden" name="value2" value="2">
    <input type="submit" name="submit2" value="Plat2">
</form>

<form action="" method="post">
    <input type="hidden" name="value3" value="3">
    <input type="submit" name="submit3" value="Plat3">
</form>

<form action="" method="post">
    <input type="hidden" name="value4" value="4">
    <input type="submit" name="submit4" value="Plat4">
</form>

<form action="" method="post">
    <input type="hidden" name="value5" value="5">
    <input type="submit" name="submit5" value="Plat5">
</form>

<?php
function write($number)
{
    file_put_contents('file.txt', $number);
}

if (isset($_POST['submit1'])) {
    write($_POST['value1']);
} else 
if (isset($_POST['submit2'])) {
    write($_POST['value2']);
} else
if (isset($_POST['submit3'])) {
    write($_POST['value3']);
} else
if (isset($_POST['submit4'])) {
    write($_POST['value4']);
} else
if (isset($_POST['submit5'])) {
    write($_POST['value5']);
}


?>