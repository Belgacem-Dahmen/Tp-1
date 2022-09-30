<?php


/*Écrivez une classe nommée Student représentant un étudiant. Elle doit avoir les propriétés nom et 
département et une méthode affichant « l'étudiant X est dans le département Y ». Créez des objets 
Student, affectez leurs propriétés, et utilisez la méthode d’affichage.*/

class Student{
public $nom;
public $departement;




public function __construct($nom,$departement){
        $this->nom = $nom;
        $this->departement = $departement;
}


public function getinfo(){
$message= " L'etudiant " . $this->nom . " est dans le departement : " . $this->departement. "<br>" ;
return $message;
}




}
/*Création d'objets
$etudiant1 = new Student();
$etudiant1->nom="Mohamed";
$etudiant1->depart="Multimédia";
$etudiant2 = new Student();
$etudiant2->nom="Amine";
$etudiant2->depart="Telecom";*/




?>