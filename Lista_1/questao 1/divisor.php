<?php
    $num = $_GET["num"];

    if ($num%10==0){
        echo"É divisivel por 10. ";
    }
    if ($num%5==0){
        echo"É divisivel por 5. ";
    }
    if ($num%2==0){
        echo"É divisivel por 2. ";
    }
    if ($num%10!=0){
        if($num%5!=0){
            if($num%2!=0){
                echo"Esse numero nao é divisivel por nenhuma das opções";
            }
        }
    }