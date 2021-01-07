<!--
    1.mark 80-100,grade A
    2.mark 70-79,grade B
    3.mark 60-69,grade C
    4.mark 50-59,grade D
    5.mark 0-49,grade F
    6.ERROR
-->

<?php
    $mark = 99;
    if($mark >= 80 and $mark <= 100){
        echo "$mark is grade A";
    }
    else if($mark >= 70 and $mark <= 79){
        echo "$mark is grade B";
    }
    else if($mark >= 60 and $mark <= 69){
        echo "$mark is grade C";
    }
    else if($mark >= 50 and $mark <= 59){
        echo "$mark is grade D";
    }
    else if($mark >= 0 and $mark <= 49){
        echo "$mark is grade F";
    }
    else{
        echo "$mark is grade ERROR";
    }
?>