<?php

    /*
     *---------------------------------------------------------
     * Les structures conditionnelles
     * if, elseif, else, 
     * ternaire
     * switch case
     *---------------------------------------------------------
    */


    //  Ternaire --------------------------------------------------------
    $age = 22;
    if ($age >= 18) {
        echo "Vous êtes majeur.";
    } else {
        echo "Vous êtes mineur.";
    }

    echo "<br>";

    echo ($age >= 18) ? "Vous êtes majeur." : "Vous êtes mineur.";

    // ----------------------------------------------------------------------
    // $serie = "Game Of Thrones";
    // if ("Game Of Thrones" !== "Vikings") {
    //     echo $serie;
    // }

    // $film = "Taxi";
    // if ($film == "Taxi") {
    //     echo "Nous sommes en train de regarder Taxi.";
    // } else {
    //     echo "Nous sommes en train de regarder un autre film.";
    // }


    // $password = "1234";
    // if ( $password === 1234 ) {
    //     echo "Mot de passe correct.";
    // } else {
    //     echo "Rien à afficher.";
    // }



    // $age = 99;
    // if ( $age == 16 ) {
    //     echo "Pas majeure mais vous pouvez accéder au système";
    // } else if($age == 18) {
    //     echo "Vous êtes majeur!";
    // } else if($age > 50) {
    //     echo "Hello";
    // } else {
    //     echo "Vous ne pouvez pas accéder au système";
    // }


    // if, elseif (Sinon Si)
    // $firstName = "Aquaman";
    // if ($firstName == "Clark") {
    //     echo "Hello Clark!";
    // } else if ($firstName == "Lex") {
    //     echo "Hello Lex!";
    // } else if ($firstName == "Chloé") {
    //     echo "Hello Chloé!";
    // } else if ($firstName == "Loise") {
    //     echo "Hello Loise!";
    // } else {
    //     echo "C'est qui? ";
    // }


    // if (Si)
    // $age = 14;
    // if ($age < 18) {
    //     echo "Vous êtes mineur";
    // }

    // $test = false;
    // if ($test) {
    //     echo "Oups";
    // }