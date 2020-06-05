<?php

include_once "config.php";

function hashmypw($pw, $salt){
    $hash = hash(sha512, $pw. $salt);
    return $hash;
}

echo hashmypw($_GET['pw'], $user['salt']);