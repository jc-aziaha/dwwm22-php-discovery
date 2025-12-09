<?php

    /*
     *---------------------------------------------------------
     * Les fonctions natives
     *---------------------------------------------------------
    */

    $date = checkdate(2, 31, 2025);
    var_dump($date);
    
    if ( $date ) {
        echo "La date est valide.";
    } else {
        echo "La date est invalide.";
    }


    // $birthDay = mktime(14, 5, 0, 12, 8, 1980);
    // echo $birthDay;

    // $semaineProchaine = time() + (7 * 24 * 60 * 60);
    // var_dump(time());

    // $dateSemaineProchaine = date('d-m-Y', $semaineProchaine);
    // var_dump($dateSemaineProchaine);

    // echo time();
    // echo "<br>";
    // echo date('m-Y');

    // $ville = null;
    // if ( isset($ville) ) {
    //     echo $ville;
    // }


    // $sentence = " a      b    c   d";
    // var_dump($sentence);
    // $sentenceTrim =  trim($sentence);
    // var_dump($sentenceTrim);

    // $firstName = " Bertrand ";
    // var_dump($firstName);

    // $firstNameTrim = trim($firstName);
    // var_dump($firstNameTrim);
    

    
    // $sentence = "Ici c'est Marseille!";
    // $rightSentence = str_replace("Marseille", "Paris", $sentence);
    // echo $rightSentence;


    // $data = ["Riri", "Fifi", "Loulou"];
    // $dataImploded = implode("/", $data);
    // echo $dataImploded;
    
    // $sentence = "a---b---c---d---e---f";
    // $sentenceTab = explode("---", $sentence);
    // var_dump($sentenceTab);

    // $roles = "ROLE_USER,ROLE_ADMIN,ROLE_SUPER_ADMIN";
    // $rolesTab = explode(",", $roles);
    // var_dump($rolesTab);

    // $rule = "min:5";
    // $ruleTab = explode(":", $rule);
    // var_dump($ruleTab);


    // a. Les fonctions natives
    // $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];
    
    // $count = count($days);
    // echo $count;
