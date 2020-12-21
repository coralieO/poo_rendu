<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>
<!DOCYTPE html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/acceuil.css" />
        <link rel="stylesheet" href="css/menu.css">
	</head>
	<body>
    <?php include('menu.php')?>
		<main>
            <section class="sondage"><!--différentes catégories de sondage du site-->
                <h2 class="ti">Catégories de Sondages</h2>
                    <div class="dif-sondages"><!--sous catégories de sondage du site-->
                    <li>
                        <h2>#Télé-réalité <i class="fas fa-star"></i></h2>
                    </li>
                    <li>
                        <h2>#Film <i class="fas fa-film"></i></h2>
                    </li>
                    <li>
                        <h2>#Emission TV <i class="fas fa-video"></i></h2>
                    </li>
                </div>
            </section>
            <section class="Vv_sondage"><!--différentes catégories de sondage du site-->
                <div class="Tl" ><!--sous catégories de sondage du site-->
                    <div class="F"><h2>#Télé-réalité <i class="fas fa-star"></i></h2></div>
                     <div class="FF">
                        
                     <li>
                         <a href="#"> <h2>10 couples parfait</h2></a>
                     </li>
                     <li>
                         <a href="#"><h2>Wags Miami</h2></a>
                     </li>
                     <li>
                        <a href="#"><h2>Secret story</i></h2></a>
                     </li>
                 </div>
            </section>
            <section class="v_sondage"><!--différentes catégories de sondage du site-->
                <div class="film" ><!--sous catégories de sondage du site-->
                   <div class="F"><h2>#Film <i class="fas fa-film"></i></h2></div>
                    <div class="FF">
                    <li>
                        <a href="#"> <h2>The best part of you</h2></a>
                    </li>
                    <li>
                        <a href="#"><h2>Dirty dancing</h2></a>
                    </li>
                    <li>
                       <a href="#"><h2>Hotel del luna</i></h2></a>
                    </li>
                </div>   
            </div>
            </section>
            <section class="Vvv_sondage"><!--différentes catégories de sondage du site-->
                <div class="E" ><!--sous catégories de sondage du site-->
                    <div class="F"><h2>#Emission TV <i class="fas fa-video"></i></h2></div>
                     <div class="FF">
                        
                     <li>
                         <a href="#"> <h2>Top chef</h2></a>
                     </li>
                     <li>
                         <a href="#"><h2>The voice kids</h2></a>
                     </li>
                     <li>
                        <a href="#"><h2>Kholonta</i></h2></a>
                     </li>
                 </div>
            </section>
		</main>
	</body>
</html>