<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">  
    <link rel="stylesheet" href="css/menu.css"> 
    <title>tchat</title>
</head>
<body>
<?php include('menu.php')?>
  <main>
    
    <h1>Commentez les résultats du sondage</h1>
    <section class="chat">
        <div class="messages"></div>
        <div class="user-inputs">
        <form action="result_tchat.php?task=write" method="POST">
            <input type="text" name="author" id="author" placeholder="votre pseudo ?">
            <input type="text" id="content" name="content" placeholder="Ecris ton commentaire !">
            <button type="submit" id="valid">Envoyer</button>
        </form>
        </div>
    </section>
  </main>
  <script src="js/app.js"></script>
</body>
</html>