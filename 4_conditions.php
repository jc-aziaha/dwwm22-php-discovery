<?php

    /*
     *---------------------------------------------------------
     * Les structures conditionnelles
     * if, elseif, else, 
     * switch case
     *---------------------------------------------------------
    */

    // if, elseif (Sinon Si)
    $firstName = "Aquaman";
    
    if ($firstName == "Clark") {
        echo "Hello Clark!";
    } else if ($firstName == "Lex") {
        echo "Hello Lex!";
    } else if ($firstName == "Chloé") {
        echo "Hello Chloé!";
    } else if ($firstName == "Loise") {
        echo "Hello Loise!";
    } else {
        echo "C'est qui? " . $firstName;
    }





    // if (Si)
    // $age = 14;
    // if ($age < 18) {
    //     echo "Vous êtes mineur";
    // }

    // $test = false;
    // if ($test) {
    //     echo "Oups";
    // }