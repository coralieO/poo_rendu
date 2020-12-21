<?php
	@$nom=$_POST["nom"];
	@$prenom=$_POST["prenom"];
	@$mail=$_POST["mail"];
	@$pass=$_POST["pass"];
	@$repass=$_POST["repass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		if(empty($nom)) $message="<li>Non invalide!</li>";
		if(empty($prenom)) $message.="<li>Prénom invalide!</li>";
		if(empty($mail)) $message.="<li>Mail invalide!</li>";
		if(empty($pass)) $message.="<li>Mot de passe invalide!</li>";
		if($pass!=$repass) $message.="<li>Mots de passe non identiques!</li>";	
		if(empty($message)){
			include("connexion.php");
			$req=$pdo->prepare("select id from users where login=? limit 1");
			$req->setFetchMode(PDO::FETCH_ASSOC);
			$req->execute(array($mail));
			$tab=$req->fetchAll();
			if(count($tab)>0)
				$message="<li>Mail existe déjà!</li>";
			else{
				$ins=$pdo->prepare("insert into users(date,nom,prenom,mail,pass) values(now(),?,?,?,?)");
				$ins->execute(array($nom,$prenom,$mail,md5($pass)));
				header("location:login.php");
			}
		}
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<header>
			Inscription
			<a href="login.php">Déja inscrit</a>
		</header>
		<form name="fo" method="post" action="" enctype="multipart/form-data">
			<div class="label">Nom</div>
			<input type="text" name="nom" value="<?php echo $nom?>" />
			<div class="label">Prénom</div>
			<input type="text" name="prenom" value="<?php echo $prenom?>" />
			<div class="label">Mail</div>
			<input type="text" name="mail" value="<?php echo $mail?>" />
			<div class="label">Mot de passe</div>
			<input type="password" name="pass" />
			<div class="label">Confirmation du mot de passe</div>
			<input type="password" name="repass" />
			<input type="submit" name="valider" value="S'inscrire" />
		</form>
		<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
	</body>
</html>