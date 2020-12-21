<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ce50670627.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/acceuil.css">
    <link rel="stylesheet" href="css/menu.css">
    <!-- <link rel="stylesheet" href="css/sondage.css"> -->
    <link rel="stylesheet" href="css/classement.css">
    <title>Classement</title>
</head>
<body>
<?php include('menu.php')?>
    <main>
        <div class="titre"><!--titre de la page-->
            <h1>Classement</h1>
        </div>
        <div class="choice">
            <label for="sondage">Différentes catégories</label><!--différentes catégories de sondage du site-->
            <select name="catégories" id="select">
                <option value="">--choisir une catégorie--</option>
                <option value="Télé-réalité">#Télé-réalité</option>
                <option value="film">#film</option>
                <option value="Emission TV">#Emission TV</option>
            </select>
        </div>
        <section id="result"><!--Classement-->
            <div class="r">
                <img src="img/Grille de répétition 1@2x.png" alt=""><!--Photo de l'utilisateur-->
                <h2>LOlita234</h2><!--Pseudo-->
                <h2>10 couples parfait</h2><!--Nom du sondage au quel il a participé-->
                <img src="img/Union 2@2x.png" alt=""><!--Evolution dans le classement-->
                <img src="img/Groupe 5@2x.png" alt=""><!--Rang-->
                <h2>4540 Pts</h2><!--Nombre de points-->
            </div>
            <div class="r">
                <img src="img/Grille de répétition 1@2x.png" alt="">
                <h2>JUlesBG</h2>
                <h2>10 couples parfait</h2>
                <img src="img/Union 2@2x.png" alt="">
                <img src="img/Groupe 8@2x.png" alt="">
                <h2>4389 Pts</h2>
            </div>
            <div class="r">
                <img src="img/Grille de répétition 1@2x.png" alt="">
                <h2>DAmso11</h2>
                <h2>10 couples parfait</h2>
                <img src="img/Union 5@2x.png" alt="">
                <img src="img/Groupe 9@2x.png" alt="">
                <h2>3989 Pts</h2>
            </div>
        </section>
    </main>
</body>
</html>