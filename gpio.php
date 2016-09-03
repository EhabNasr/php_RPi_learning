<form method="get" action="gpio.php">
    <input type="submit" value="ON" name="on">
    <input type="submit" value="OFF" name="off">
    <br>
    <p>LED is </p>
    <p id="state"></p>
</form>
<?php
exec("gpio mode 15 out");
if(isset($_GET['on'])){
    exec("gpio write 15 1");
    echo "LED is on";}
else if(isset($_GET['off'])){
    exec("gpio -g write 17 0");
    echo "LED is off";}
    while (1){
        $gpio_status = exec("gpio read 15");
        if($gpio_status == '1'){
            echo "On";
        } else{
            echo "OFF";
        }

    }
?>