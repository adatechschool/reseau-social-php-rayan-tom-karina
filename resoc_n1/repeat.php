<?php

session_start();

$mysqli = new mysqli("localhost", "root", "root", "socialnetwork");

function traduireMois($moisAnglais) {
    $moisTraduits = array(
        "January" => "janvier",
        "February" => "février",
        "March" => "mars",
        "April" => "avril",
        "May" => "mai",
        "June" => "juin",
        "July" => "juillet",
        "August" => "août",
        "September" => "septembre",
        "October" => "octobre",
        "November" => "novembre",
        "December" => "décembre"
    );
    
    // Vérifie si le mois anglais existe dans le tableau
    if (array_key_exists($moisAnglais, $moisTraduits)) {
        return $moisTraduits[$moisAnglais];
    } else {
        return $moisAnglais; // Retourne le mois anglais s'il n'est pas trouvé dans le tableau
    }
}
?>