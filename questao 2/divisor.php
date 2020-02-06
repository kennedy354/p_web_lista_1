<?php
    $num = $_GET["num"];

    if ($num%10==0){
        echo"é divisivel por 10";
    }
    if ($num%5==0){
        echo"é divisivel por 5";
    }
    if ($num%2==0){
        echo"é divisivel por 2";
    }