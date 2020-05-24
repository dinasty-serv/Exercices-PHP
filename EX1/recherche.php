<?php

function rechercheSimple($data) {
    $entries = [8, 44, 61, 50, 6, 20, 100, 67, 150, 80, 4, 0, 55, 9, 37];

    /*
     * /!\ modifier votre code pour pendre en compte que les tableaux considérés sont ordonnés de manière croissante /!\ 
     */

    sort($entries);
    $response = ["error" => false, "data" => $data];

    if (in_array($data, $entries)) {

        return $response;
    } else {
        $response['error'] = true;
        return $response;
    }
}

/*
 * Pour comprendre la recherche séquentielle 
 */

function RechercheSequentielle($value) {
    $entries = [8, 44, 61, 50, 6, 20, 100, 67, 150, 80, 4, 0, 55, 9, 37];
    sort($entries);
    $position = 0;
    $nb = count($entries);

    $response = ['error' => false, 'position' => 0, 'value' => $value];

    while ($position < $nb && $entries[$position] != $value) {

        $position ++;
    }
    if ($entries[$position] == $value) {
        $response['position'] = $position;
    } else {
        $response['error'] = true;
    }
    return $response;
}

/*
 * Recherche Dichotomique
 */

function RechercheDichotomique($value) {
    /*
     * Response
     */
    $response = ['error' => false, 'position' => 0, 'value' => $value];

    $entries = [8, 44, 61, 50, 6, 20, 100, 67, 150, 80, 4, 0, 55, 9, 37];
    /*
     * Trie obligatoire en ordre croissant
     */
    sort($entries);


    $positionMin = 0;
    $positionMax = count($entries);
    $positionMilieu = intVal(($positionMin + $positionMax) / 2);

    while ($positionMin < $positionMax && $entries[$positionMilieu] != $value) {

        if ($value < $entries[$positionMilieu]) {

            $positionMax = $positionMilieu - 1;
        } else {
            $positionMin = $positionMilieu + 1;
        }

        $positionMilieu = intVal(($positionMin + $positionMax) / 2);
    }
    if ($entries[$positionMilieu] == $value) {
        $response['position'] = $positionMilieu;
    } else {
        $response['error'] = true;
    }
    return $response;
}


