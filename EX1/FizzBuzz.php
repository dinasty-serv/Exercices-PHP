<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function FizzBuzz(){
    
    $result = [];
    
    for($i = 1; $i < 101; $i++){
       
        array_push($result, $i);
       
        
        $multiple3 = $i / 3;
        
        $multiple5 = $i / 5;
        
        if (is_int($multiple3)) {
            
            $result[$i] = "Fizz";
        }
        
        
        if (is_int($multiple5)) {
            
            $result[$i] = "Buzz";
        }
        
    }
    
    return $result;
}
