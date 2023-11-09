<?php 
require "../Modeles/Directeur.php";
require "../Modeles/Formateur.php";
require "../Modeles/Stagiaire.php";

session_start();
 
    $user=unserialize($_SESSION["user"]);
    if ($user instanceof Directeur)
    $type="directeur";
    if($user instanceof Formateur)
    $type="Formateur";
    if($user instanceof Stagiaire)
    $type="Stagiaire";
if($type=="directeur")
echo "Directeur";
else if($type=="Formateur")
echo "Formateur";
else if($type=="Stagiaire")
echo "Stagiaire";
else header("Location:../Views/login.php?Invalide=false");
$_SESSION["user"]=serialize($user);

?>