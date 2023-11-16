<?php 
session_start();
include_once 'Modules/Connexion.php';
require "Modules/Directeur.php";
require "Modules/Formateur.php";
require "Modules/Stagiaire.php";
require_once "Controller/FormateurController.php";

$user=unserialize($_SESSION["user"]);
    if(!isset($_SESSION["user"])){
        header("Location:Views/login.php");
    }

    if($user instanceof Directeur)
        require "Views/DirecteurViews/directeurVeiw.php";
    if($user instanceof Formateur)
        require "Views/FormateurViews/FormateurIndex.php";
    if($user instanceof Stagiaire)
        echo "bonjoure Stagiaire" ;


?>