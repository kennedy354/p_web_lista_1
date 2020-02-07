<?php
    $nom = $_GET["nom"];
    $sex = $_GET["sex"];
    $ida = $_GET["ida"];

    if($sex == 'feminino'){
        if($ida < 18){
            echo $nom;
            echo " Acesso proibido. ";
        }
        else{
            echo $nom;
            echo " Acesso permitido";
        }
    }
    if($sex == 'masculino'){
        echo $nom;
        echo " Acesso permitido";
    }