<?php
class Pizza extends Database{
   private $Id;
   private $nomPizza;
   private $description ;
   private $prixPart;
   private $prixPetite;
   private $prixGrande;
   
   public function __construct($Id="",$nom="",$desc="",$part=0,$petite=0,$grande=0)
   {
     $this->Id = $Id;
     $this->nomPizza = $nom;
     $this->description  = $desc;
     $this->prixPart = $part;
     $this->prixPetite = $petite;
     $this->prixGrande = $grande;
   }

    public function getId (){
    return $this->id;
    }
    public function getNomPizza (){
       return $this->nomPizza;
    }
   public function getDescription (){
       return $this->description;
    }
   
   public function getPrixPart (){
       return $this->prixPart;
   }
   public function getPrixPetite (){
       return $this->prixPetite;
   }
   public function getPrixGrande (){
       return $this->prixGrande;
   }
   public static function listePizzas(){
        $db = new Database();
        $req = $db->prepare("SELECT * FROM pizzas");
        $req->execute();
        $file = $req->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "Pizza");
        $result = Array();
        foreach($file as $elem){
            array_push($result, $elem);
        }
        return $result;
    }
}