<?php

    /*
     *---------------------------------------------------------
     * Les structures de contrôle
     *  - while (tant que)
     *  - do...while (faire...tant que)
     *  - for (pour)
     *  - foreach (pour chaque)
     *---------------------------------------------------------
    */


    // foreach (pour chaque) ----------------------------------------------------------------------------------
    $days = [
        0 => "Lundi", 
        1 => "Mardi", 
        2 => "Mercredi", 
        3 => "Jeudi", 
        4 => "Vendredi", 
        5 => "Samedi", 
        6 => "Dimanche"
    ];
    
    foreach ($days as $day) {
        echo $day . "<br>";
    }
    
    echo "--------------------------<br>";

    foreach ($days as $key => $day) {
        echo "A la clé " . $key . " , nous avons: " . $day . "<br>";   
    }


    // for (pour) ----------------------------------------------------------------------------------
    // $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    // var_dump($days);
    // for ($i=0; $i < count($days); $i++) { 
    //     echo $days[$i] . "<br>";
    // }

    // for ($i=0; $i < 7; $i++) { 
    //     echo "Hello <br>";
    // }

    // for ($i=0; $i<3; $i++) { 
    //     echo "Hello <br>";
    // }

    // do...while (faire...tant que)-----------------------------------
    // $x = 2;
    // do {
    //     echo $x; // 2 3 4 5 6 7 8 9 10
    //     $x++; // 3 4 5 6 7 8 9 10 11
    // } while ($x >= 10);
    
    // while (tant que)------------------------------------------------
    // Eviter la boucle infinie.
    // $firstName = "jc";
    // $i = 0;
    // while ($firstName == "jc" && $i <= 5) {
    //     echo $firstName . "<br>";
    //     $i++;  
    // }

    // $x = 2;
    // while ($x <= 10) {
    //     echo $x . "<br>";
    //     $x++;
    // }