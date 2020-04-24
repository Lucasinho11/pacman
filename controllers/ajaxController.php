<?php
require('models/Score.php');
$db = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$query = $db->query('SELECT * FROM Score');
	$posts = $query->fetchAll();
	//echo json_encode($posts);
}
else{
	
    //ca sera l'appelle du post
    //pour enregistrer un new score
    //on récupère la data envoyée en JSON 
		//(impossible à récupérer en $_POST si "Content-type": "application/json; charset=UTF-8" a été spécifié en header du coté de JS)
		$encodedData = file_get_contents("php://input");
		//on décode la data pour l'exploiter en PHP
		$data = json_decode($encodedData, true);
		
		//faire passer des messages si champs obligatoires non remplis
		//vérifier si les champs sont pas vides
		//si vides, renvoyer une erreur à afficher $answer['error']
		
		
			
			//insertion en DB
			insertScore($data);
			
			//on formatte le tableau de réponse pour exploitation en JS
			$answer = [
				'message' => $result ? 'nouveau post bien enregistré' : 'post pas enregistré',
				'newPost' => $data
			];
		
		
		//réponse encodée en JSON pour être explotable en JS
		echo json_encode($answer);
			
}
