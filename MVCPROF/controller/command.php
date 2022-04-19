<?php
    require "../model/database.class.php";
    require "../model/pizza.class.php";
    require "../view/ViewAccueil.php";
    require "../view/cartes.class.php";
    

    $url = filter_input(INPUT_GET, "url");
   

    switch($url) {
        case "carte.html" :
            
            $pizzaList = Pizza::pizzaList();
            $carte = new Carte($pizzaList);
            echo "<div class='menu-heading'>Nos Pizzas</div>";
            $carte->html();
            break;

            case "index.html" : 
                $accueil = new Accueil();
                print_r($accueil->html()
            );
                break;

            case "" :
                $accueil = new Accueil();
                print_r($accueil->html());
                /////
            break;
    }
