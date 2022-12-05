<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=phpbdd;', 'exo', 'exopassword');

    // par défaut, les SELECT FROM  -> fetch et fetchAll recupere des tableaux associatifs
    // possible de recup des objets en changeant PDO::FETCH_ASSOC par PDO::FETCH_OBJ
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}
catch(PDOException $e) {
    die('Cannot connect to DB');
}
