<?php
$vrienden = array();
$line = readline("Hoeveel vrienden zal ik vragen om hun droom?");
for ($i=0; $i < $line ; $i++) { 
    $Naam = readline("Wat is jouw naam?");
    $dromenTot = readline("Hoeveel dromen ga je toevoegen?");
    $dromen = array();
    for ($j=0; $j < $dromenTot; $j++) { 
        echo "Wat is je droom? \n";
        $dromen[] = readline('');
    }
    $array = array(
        $Naam => $dromen
    );
    $vrienden = array_merge($vrienden, $array);
}
var_dump($vrienden);
?>