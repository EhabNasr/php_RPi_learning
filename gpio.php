<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GPIO</title>
</head>
<body>
<form method="get" action="gpio.php">
    <input type="submit" value="ON" name="on">
    <input type="submit" value="OFF" name="off">
    <br>
</form>
</body>
</html>
<?php
    exec("gpio mode 15 out");
    if(isset($_GET['on'])){
        exec("gpio write 15 1");
        echo "LED is on";}
    else if(isset($_GET['off'])){
        exec("gpio write 15 0");
        echo "LED is off";}
?>