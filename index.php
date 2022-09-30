<?php

include 'classes/student.php';
include 'classes/personne.php';
include 'classes/myform1.class.php';



$etudiant1 = New Student("Mohamed","Multimédia");

$etudiant2 = New Student("Amine","Telecom");

echo $etudiant1->getinfo();
echo $etudiant2->getinfo();

echo('<br>');

echo "<hr>";


$kacem = New Personne("Dahmen","Kacem","26 RUE BOUKHARI");



echo $kacem->getPersonne();

$kacem->setAdresse("123 WALSTREET USA");

echo("Aprés modification d'adresse <br>");
echo $kacem->getPersonne();




$rachida = New Personne("Khili","Rachida","12 RUE TUNIS MOUROUJ-5");

echo $rachida->getPersonne();


echo "<hr>";

 $form = New Myform1("formulaire ");
    $form->setText();
    $form->setText();
    $form->setText();
    $form->setText();
    $form->setSubmit();


   
?>



