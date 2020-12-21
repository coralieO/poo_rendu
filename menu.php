<header>
            <nav>
                 <div class="pages_principales"><!--menu-->
                 <li>
                <a href="session.php"> Espace privé</a> 
                 </li>
                 <li>
                 <h1>
                <?php 
                    echo (date("H")<18)?("Bonjour"):("Bonsoir");
                ?>
                <span>
                <?=$_SESSION["nomPrenom"]?>
                </span>
                </h1>
                </li>
                <li>
                    <a href="classement.php"> <h2>Classement</h2></a>
                </li>
                <li>
                    <a href="liste_des_sondages.php"> <h2>Sondages</h2></a>
                </li>
                <li>
                    <a href="tchat.php"> <h2>Tchat</h2></a>
                </li>
                <li>
                    <a href="creation_de_sondage.php"> <h2>Création de sondage</h2></a>
                </li>
                <li>
                <a href="deconnexion.php">Quitter la session</a>
                </li>
                </div>
            </nav>
</header>