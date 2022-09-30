<?php
class Personne {

/*
classe représentant une personne. Elle doit avoir les propriétés nom, prénom et adresse, 
ainsi qu’un constructeur et un destructeur. Une méthode getpersonne()doit retourner les
coordonnées complètes de la personne. Une méthode setadresse()doit permettre de modifier 
l’adresse de la personne. Créez des objets personne, et utilisez l’ensemble des méthodes.


*/


public $nom;
public $prenom;
public $adresse;

public function __construct($nom,$prenom,$adresse){
    $this->nom =$nom;
    $this->prenom =$prenom;
    $this->adresse = $adresse;
}

/*public function __destruct() {
    print " <br> Destruction de l'objet " . $this->nom . "\n";
}*/

public function getPersonne(){
    $message =("NOM : " . $this->nom ."<br>". "PRENOM : " . $this->prenom . "<br>" . "ADRESSE : " . $this->adresse ."<br>");
        return $message;
}

public function setAdresse($adresse){
    $this->adresse = $adresse;

}

}

?>