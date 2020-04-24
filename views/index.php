<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <title>Vanilla Pac-Man</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="body">
    <img src="assets/img/pacman-logo.png" alt="logo" class="logo">
    <form action="" method="post" id="form" class="form">
        <label class="text_form">Pseudo (3 caractères): </label>
        <input type="text" required maxlength="3" name="pseudo">
        <input type="submit" value="Start" >
    </form>
    
    
    <div>
        <h1 id="pseudo" class="text_form"></h1>
        <h1 id="score" class="text_form"></h1>
        <h1 id="level" class="text_form"></h1>
    
    </div>
    <div class="map" id="map">
        <img src="assets/img/pacman.gif" alt="Pac-Man" data-top="500" data-left="500">
        <img src="assets/img/red-ghost.png" alt="Red ghost" data-top="300" data-left="400">
        <img src="assets/img/pink-ghost.png" alt="Pink ghost" data-top="300" data-left="400">
        <img src="assets/img/blue-ghost.png" alt="Blue ghost" data-top="300" data-left="400">
        
        <img src="assets/img/background.svg" alt="Labyrinthe">
    </div>
    <div id="gameOver"></div>
    <script src="assets/js/main_FINAL.js"></script>
</body>
</html>