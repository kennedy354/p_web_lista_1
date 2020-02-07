<?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $som = $num1 + $num2;
    if($som>20){
        $som+=8;
        echo $som;
    }
    if($som<=20){
        $som-=5;
        echo $som;
    }