<?php

function getScore(){
    $db = dbConnect();
    $query = $db->query('SELECT * FROM Score ORDER BY score DESC limit 10');
    $top_scores = $query->fetchAll();

    return $top_scores;
}

function insertScore(){
    $db = dbConnect();
    $query = $db->prepare('INSERT INTO Score(pseudo, score) VALUES (?,?)');
    $insert = $query->execute(
        array(
            $data['pseudo'],
            $data['score'],
        ));
    return $insert;
}
