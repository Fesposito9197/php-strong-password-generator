<?php
function randomPassword($user_pass) {
    $alphabet="ABCDFGHILMNOPQRSTUVZXYabcdfghilmnopqrstuvzxyz12345678910#?&!";
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i <$user_pass ; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
};