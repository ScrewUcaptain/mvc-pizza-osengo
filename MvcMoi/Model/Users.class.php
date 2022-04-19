<?php

class Users extends Database
{
    public function setUsers($nom, $prenom, $adresse, $email)
    {
        $sql = "SELECT Id FROM users where email = :email";
        $req = $this->prepare($sql);
        $req->bindParam(":email", $email);
        $req->execute();
        $result = $req->fetchAll();
        if (count($result) == 0) {
            $sql = " INSERT INTO Users (nom, prenom, adresse, email) VALUES (:nom, :prenom, :adresse, :email);";
        } else {
            $sql = " UPDATE Users SET nom= :nom, prenom = :prenom , adresse= :adresse WHERE email = :email;";
        }
        $req =   $this->prepare($sql);
        $req->bindParam(":nom", $nom);
        $req->bindParam(":prenom", $prenom);
        $req->bindParam(":adresse", $adresse);
        $req->bindParam(":email", $email);
        $req->execute();
    }

    public function getUsers()
    {
        $sql = "select * FROM Users";
        $req =  $this->prepare($sql);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_CLASS);
    }
}
