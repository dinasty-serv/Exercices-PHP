<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Class
 *
 * @author Dinasty-Serv
 */
/*
 * Trie à bulle
 */

function TriABulle() {
    $entries = [8, 44, 61, 50, 6, 20, 100, 67, 150, 80, 4, 0, 55, 9, 37];
    $result = $entries;
    $max = count($entries);
    $tri = false;
    while (!$tri) {
        $tri = true;
        for ($i = 0; $i < $max - 1; $i ++) {

            if ($result[$i] > $result[($i + 1)]) {
                /* 8 */         /* 0 */

                $tmp = $result[$i];
                $result[$i] = $result[($i + 1)];
                $result[($i + 1)] = $tmp;


                $tri = false;
            }
        }
    }
    return $result;
}
/*
 * Trie à Insertion
 */
function TriInsertion() {
    $entries = [8, 44, 61, 50, 6, 20, 100, 67, 150, 80, 4, 0, 55, 9, 37];

    $max = count($entries);

    for ($i = 0; $i < $max; $i++) {
        
        $Elem_insert = $entries[$i];

        for ($j = 0; $j < $i; $j++) {
            $Elem_courant = $entries[$j];

            if ($Elem_insert < $Elem_courant) {
                
                $entries[$j] = $Elem_insert;
                $Elem_insert = $Elem_courant;
            }
        }
        $entries[$i] = $Elem_insert;
    }

    return $entries;
}

    
   

