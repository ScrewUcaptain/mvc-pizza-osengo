<?php

class Stock extends Database
{
    public function setStockDownByOne($produit, $nbrUsed)
    {
        $SQL = "SELECT * FROM stock where nomIngr LIKE $produit";
        $req = $this->prepare($SQL);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_CLASS);
        if (count($result)) { // Cahnger la condition pour que quand on se trompe de produit une erreur est envoyé dans un else
            $SQL = "UPDATE stock SET nbrStock = nbrStock - $nbrUsed WHERE nomIngr LIKE $produit";
            $req = $this->prepare($SQL);
            $req->execute();
            return "Le produit '$produit' à diminuer dans les stocks.";
        } else return "Erreur, Ingrédient Introuvable dans la base.";
    }

    public function setStock($produit, $nbrToSet)
    {
        $SQL = "SELECT * FROM stock where nomIngr LIKE $produit";
        $req = $this->prepare($SQL);
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_CLASS);
        if (count($result)) { // Cahnger la condition pour que quand on se trompe de produit une erreur est envoyé dans un else
            $SQL = "UPDATE stock SET nbrStock = $nbrToSet WHERE nomIngr LIKE $produit";
            $req = $this->prepare($SQL);
            $req->execute();
            return "Le produit '$produit' est disponible $nbrToSet fois.";
        } else echo "Erreur, Ingrédient Introuvable dans la base";
    }

    public function getStock()
    {
        $req = $this->prepare("SELECT * FROM stock");
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS);
    }
}
