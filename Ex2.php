<?php
     $number1 =  $_GET["number1"];
     $number2 =  $_GET["number2"];

     $max = $number1 > $number2  ? $number1 : $number2;

    echo "ค่ามากสุด ${max}";

?>