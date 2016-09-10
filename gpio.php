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
    <input type="submit" value="Check Lights" name="check">
    <br>
    <input type="submit" value="Open Door" name="openlock">
    <input type="submit" value="Close Door" name="closelock">


</form>
</body>
</html>
<?php
    exec("gpio mode 14 out");
    $gpio_status = exec("gpio read 14");
    if(isset($_GET['on'])){
        exec("gpio write 14 0"); //Negative Logic
    }
    if(isset($_GET['off'])){
        exec("gpio write 14 0");
    }
    if(isset($_GET['off'])){
        exec("gpio write 14 1"); //Negative Logic
    }
    if(isset($_GET['openlock'])){
        echo exec("sudo ./C_Lock/openDoor");
        echo "Door is open";
    }
    if(isset($_GET['closelock'])){
        echo exec("sudo ./C_Lock/closeDoor");
        echo "Door is closed";
    }
?>