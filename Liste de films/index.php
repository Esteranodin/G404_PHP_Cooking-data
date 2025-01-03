<?php

// top100 des films visionnés au États-Unis sur la plateforme iTunes.

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

// json_decode() permet de décoder une chaîne JSON (comme celle lue depuis le fichier) et de la convertir en un tableau ou un objet. Le premier argument est la chaîne JSON à décoder (ici $string).
// Le deuxième argument (ici, true) indique que le résultat doit être un tableau associatif au lieu d'un objet. Si on avait passé false, le résultat aurait été un objet.

// La variable $brut = tableau où les clés sont les éléments de l'objet JSON.
//  La variable $top = un tableau de la liste.
// ==> clé principale = feed et sous-clé = entry

// pour prévisualiser tableau 
// echo "<pre>";
// var_dump($top); 
// echo "</pre>";

// ------------- Afficher le top10 des films sous cette forme -------------

foreach ($top as $index => $film) {

    echo($index +1) . " " . $film['im:name'] ['label'] . "<br>";

    if($index + 1 === 10){
        break;
    }
}





?>