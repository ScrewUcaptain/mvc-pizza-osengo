<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP MVC</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    
    <body>
    <header>
        <nav class="menus1">		
            <label class="tel"><a href="tel:+33600000000"> 0600000000</a></label>
            <ul>
                
                <li><a href="#">Panier</a></li>    
                <li><a href="carte.html">Carte</a></li>
                <li><a href="index.html">Accueil</a></li>              
            </ul>            
        </nav>        
	  <nav class="menus2">
        	<label class="tel"><a href="tel:+33600000000">✆</a></label>	
			<ul class="menuDeroulant">
				<li class="menuBurger">☰</li>  
                <li><a href="#">Accueil</a></li>
                <li><a href="carte.html">Carte</a></li>
				<li><a href="index.html">Panier</a></li>	
			</ul> 

        </nav>
	  <img class="pizza" src="./img/pizza.png" alt="logo">
    </header>
    <section class="menu">
			<div class="container">
				
				<div class="menu-grid">         
        <?php
            require "../controller/command.php";
        ?>

            </div>
			</div>
			<div style="height: 100px;">&nbsp;</div>	
		</section>
    </main>
    <footer>
        <div class="icons"><a href="https://www.google.fr/maps/place/2+Av.+de+Montredon,+13008+Marseille/@43.2453546,5.372393,19z/data=!4m8!1m2!2m1!1s1+plage+du+prado!3m4!1s0x12c9c70b3322b68b:0x3aa8471c8973edd2!8m2!3d43.2453536!4d5.3729402">⚲</a><a href="mailto:pizzeriadelaplage@gmail.com">✉</a></div>
    </footer>
    </body>
</html>