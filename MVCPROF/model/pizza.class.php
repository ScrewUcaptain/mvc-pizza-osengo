<?php
    class Pizza extends Database {
        private int $id=0;
        private string $nomPizza="";
        private string $description="";
        private int $prixGrande=0;
        private int $prixPetite=0;
        private int $prixPart=0;

        public function setNom(string $nom){
             $this->nomPizza=$nom;
        }
        public function setDescription(string $description){
             $this->description=$description;
        }
        public function setPrixGrande(int $prixGrande){
             $this->prixGrande=$prixGrande;
        }
        public function setPrixPetite(int $prixPetite){
             $this->prixPetite=$prixPetite;
        }
        public function setPrixPart(int $prixPart){
             $this->prixPart=$prixPart;
        }
        public function getNom(): string{
            return $this->nomPizza;
        }
        public function getDescription(): string{
            return $this->description;
        }
        public function getPrixGrande(): int{
            return $this->prixGrande;
        }
        public function getPrixPetite(): int{
            return $this->prixPetite;
        }
        public function getPrixPart(): int{
            return $this->prixPart;
        }
        public static function pizzaList() : Array { 
            $dbh=new Database(); // Ligne en plus vu que la méthode est statique
            $sql = "select * from pizzas";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $list = $sth->fetchAll(PDO::FETCH_CLASS, "Pizza"); //= remplace les 3 lignes suivantes
            return $list;
        }

      public function save(){
            if($this->id == 0) {
                 $sql=" INSERT INTO pizzas (nomPizza, description, prixGrande, prixPetite, prixPart) VALUES (:nomPizza, :description, :prixGrande, :prixPetite, :prixPart);";
            } 
            else {
                $sql=" UPDATE pizzas SET nomPizza= :nomPizza, description = :description, prixGrande = :prixGrande, prixPetite = :prixPetite, prixPart = :prixPart WHERE id = :id;";
            }
            $sth =   $this -> prepare($sql);
            $sth->bindParam(":nomPizza",$this->nom);
            $sth->bindParam(":description",$this->description);
            $sth->bindParam(":prixGrande",$this->prixGrand);
            $sth->bindParam(":prixPetite",$this->prixPetite);
            $sth->bindParam(":prixPart",$this->prixPart);
            if($this->id > 0) { $sth->bindParam(":id",$this->id); }
            $sth->execute();
      }
    }

