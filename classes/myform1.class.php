<?php
class Myform1 {


    public function __construct(){
        $message ="<div style="."display:flex flex-direction:column"."
        flex-direction:column
        <form methode="."POST"." action="."Tp-1/classes/myform1.class.php".">
        <fieldset>";
        echo $message;
    }


    public function setText(){
        $message ="<input type="."text". "name="."email"." placeholder="."Enter your email".">";
        echo $message;
    }


    public function setSubmit(){
        $message ="<button type="."submit"." "."> Valider </button>";
        echo $message;
    } 
}





    