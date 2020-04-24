<?php

function dbConnect()
{
    try{
        $db = new PDO('mysql:host=localhost;dbname=pacman;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $exception) //$e contiendra les éventuels messages d’erreur
    {
        die( 'Erreur : ' . $exception->getMessage() );
    }

    return $db;
}