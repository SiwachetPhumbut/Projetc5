<?php
    $mark = $_GET['mark'];
    $grad = 0.00;

    if($mark >= 0.00 && $mark <= 100){
        if($mark < 50) { $grade = 0.00;}
        else if($mark < 55) { $grade = 1.00;}
        else if($mark < 60) { $grade = 1.50;}
        else if($mark < 65) { $grade = 2.00;}
        else if($mark < 70) { $grade = 2.50;}
        else if($mark < 75) { $grade = 3.00;}
        else if($mark < 80) { $grade = 3.50;}
        else if($mark <= 100) { $grade = 4.00;}
        echo "คะแนน ${mark} เกรด {$grade}";
    }else { echo "คะแนนไม่อยู่ในช่วง 0-100"; }
 ?> 