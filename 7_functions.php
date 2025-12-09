<?php

    /*
     *---------------------------------------------------------
     * Créons nos propres fonction
     *      - ne retournant rien comme valeur
     *      - retournant une valeur
     *---------------------------------------------------------
    */



    function afficher() {
        $nom = "Wick";
    }

    echo $nom;


    // function additionner(int|float $nombre1, int|float $nombre2) : int|float {
    //     return $nombre1 + $nombre2;
    // }
    // echo additionner(2, 2);


    // function showDays(): void {
    //     $days = ["Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche"];

    //     foreach ($days as $day) {
    //         echo $day . "<br>";
    //     }
    // }
    // showDays();


    // function afficher() : void {
    //     echo "Hello";
    // } 
    // afficher();


    // function calculDuPoids(float $masse, float $pesanteur = 9.81) : float {
    //     $poids = $masse * $pesanteur;
    //     return $poids;
    // } 
    // echo calculDuPoids(5);
    // echo "<br>";
    // echo calculDuPoids(70);
    // echo "<br>";
    // echo calculDuPoids(80);
    // echo "<br>";
    // echo calculDuPoids(78.55, 7.3);
    // echo "<br>";


    // function saluer($prenom, $nom, $typeSalutation = "Salut") {
    //     return $typeSalutation." ".$prenom." ".$nom.".";
    // }

    // echo saluer("John", "Wick");
    // echo "<br>";
    // echo saluer("Samuel", "Jackson");
    // echo "<br>";
    // echo saluer("John", "Travolta", "Bonjour");



    // function calculDuPoids($masse, $pesanteur) {
    //     $poids = $masse * $pesanteur;
    //     return $poids;
    // }  
    
    // echo calculDuPoids(50, 9.81);
    // echo "<br>";
    // echo calculDuPoids(40, 9.81);
    // echo "<br>";
    // echo calculDuPoids(30, 9.81);
    // echo "<br>";

    // $poids = 50 * 9.81;
    // echo $poids;