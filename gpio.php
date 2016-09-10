<?php
exec("gpio mode 15 out");
if(isset($_GET['on'])){
    exec("gpio write 15 1");
    echo "LED is on";}
else if(isset($_GET['off'])){
    exec("gpio write 15 0");
    echo "LED is off";}
?>