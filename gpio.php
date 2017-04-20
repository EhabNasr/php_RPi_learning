<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GPIO</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div class="container-fluid">
    <form method="get" action="gpio.php">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6"><input type="submit" value="ON" name="on" class="btn btn-primary btn-block"></div>
                <div class="col-xs-6"><input type="submit" value="OFF" name="off" class="btn btn-danger btn-block"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12"><input type="submit" value="Check Lights" name="check" class="btn btn-info btn-block"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-6"><input type="submit" value="Open Door" name="openlock" class="btn btn-primary btn-block"></div>
                <div class="col-xs-6"><input type="submit" value="Close Door" name="closelock" class="btn btn-danger btn-block"></div>
            </div>
            <br>
        </div>
    </form>
</div>
</body>
</html>
<?php
    exec("gpio mode 14 out");
    $gpio_status = exec("gpio read 14");
    if(isset($_GET['on'])){
        exec("gpio write 14 0"); //Negative Logic
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