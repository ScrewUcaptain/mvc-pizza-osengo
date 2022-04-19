<?php
class Commande extends Database
{

    public function getCommande($numCom)
    {
        $SQL = "SELECT * FROM compaim WHERE numCom LIKE $numCom";
        $req = $this->prepare($SQL);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_CLASS);
        if (count($result) !== 0) {
        }
    }

    public function afficheCommande($numCom)
    {
        $commande = "SELECT * FROM constituee INNER JOIN pizza ON constituee.id_pizza = pizza.id INNER JOIN compaim 
        ON constituee.id_com = compaim.id WHERE constituee.numCom LIKE '$numCom'";
        $req = $this->prepare($commande);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS);
    }
}
