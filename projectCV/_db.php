<?php

define('DSN','mysql:host=localhost;dbname=lesnous');
define('USER','emmanuelle');
define('PASS','newPassword2.0');

//vérifier connexion erreur
// try
//     {
    $pdo = new \PDO(DSN, USER, PASS);
    // }
    // catch(Exception $e){
    //     echo'Error!: ' . $e->getMessage() . '<br\>';
    //     die();
    // }