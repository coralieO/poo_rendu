<?php
	session_start();//recuperation des valeurs du formulaire
	@$mail=$_POST["mail"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		include("connexion.php");
		$res=$pdo->prepare("select * from users where mail=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($mail,md5($pass)));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message="<li>Mauvais mail ou mot de passe!</li>";
		else{
			$_SESSION["autoriser"]="oui";
			$_SESSION["nomPrenom"]=strtoupper($tab[0]["nom"]." ".$tab[0]["prenom"]);
			header("location:session.php");
		}
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/user.css" />
	</head>
	<body onLoad="document.fo.login.focus()">
		<header>
			Authentification
			<a href="inscription.php">S'inscrire</a>
		</header>
		<form name="fo" method="post" action=""><!--formulaire de connexio-->
			<div class="label">Mail</div>
			<input type="email" name="mail" value="<?php echo $mail?>" />
			<div class="label">Mot de passe</div>
			<input type="password" name="pass" />
			<input type="submit" name="valider" value="S'authentifier" />
		</form>
		<?php if(!empty($message)){ ?>
		<div id="message"><?php echo $message ?></div>
		<?php } ?>
	</body>
</html>