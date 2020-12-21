<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
 include('database_connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/liste_des_sondages.css">
    <link rel="stylesheet" href="css/menu.css">
    
    <title>liste des sondages</title>
</head>
<body>
<?php include('menu.php')?>
    <main>
    <div id="titre"><h1>liste des sondages</h1></div>
   <?php  $sondage= $db -> query("SELECT * FROM sondage;");  ?> <!--selection de tous les élément de la table sondage-->
        <section id="tb1">
     <table id="tb"><!-- tableau d'affichage de la liste dessondages-->
         <thead><!--en tête du tableau-->
             <tr>
                 <th class="th">ID</th>
                 <th class="th" >PSEUDO DU CREATEUR</th>
                 <th class="th">TITRE DU SONDAGE</th>
                 <th class="th">QUESTION</th>
             </tr>
         </thead>
         <tbody>
             <?php foreach ($sondage as $sondages) : ?><!--élément du tableau// boucle foreach pour parcourir tous les éléments du
                 tableau-->
             <tr>
            
                <td id="id"><?= $sondages["id"]; ?></td>
                <td><?= $sondages["pseudo"]; ?></td>
                <td ><a href="sondages_index.php?sondage=<?= $sondages["titre_sondage"]; ?>&amp;question=<?= $sondages["question"]; ?>&amp;choix1=<?= $sondages["choix1"]; ?>&amp;choix2=<?= $sondages["choix2"]; ?>&amp;choix3=<?= $sondages["choix3"]; ?>&amp;choix4=<?= $sondages["choix4"]; ?>&amp;choix5=<?= $sondages["choix5"]; ?>"><?= $sondages["titre_sondage"]; ?></a></td>
                <td><?= $sondages["question"]; ?></td>
             </tr>
             <?php endforeach; ?><!--Arrêt de la boucle foreach parce que j'ai utilisé sa syntaxe alternative qui s'écrit avec des 
             acolades-->
         </tbody>
     </table>
     </section>
    </main>
     <script type= "text/javascript" src="liste.js"></script>
</body>
</html>
   
