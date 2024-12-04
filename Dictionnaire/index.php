<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

// ------------- Combien de mots contient ce dictionnaire ? -------------
// echo count($dico);

// Combien de mots font exactement 15 caractères ?

// $count = 0;

// foreach ($dico as $key => $value) {
//     $words15 = strlen($value);

//    if ($words15 === 16) {
//     $count++ ;
// }
// };

// echo $count;

// ------------- Combien de mots contiennent la lettre « w » ? -------------
// $wordW = 0;

// foreach ($dico as $key => $value) {
//     if (str_contains($value, 'w')) {
// $wordW++;
//     } ;
// }
// echo $wordW;

// ------------- Combien de mots finissent par la lettre « q » ? -------------

// $wordQ = 0;

// foreach ($dico as $value) {
//     $value = trim($value);

//     if (strlen($value) > 0 && $value[strlen($value) - 1] == 'q') {
//         $wordQ++;
//     }
    
// }
// echo $wordQ;
