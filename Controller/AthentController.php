<?php 
require_once "Controller.php";
require "../Modeles/Directeur.php";
require "../Modeles/Formateur.php";
require "../Modeles/Stagiaire.php";
class AthentController extends Controller{
public function store($email,$password,$type){
$user=false;
if($type=="Directeur"){
    $user=Directeur::login($this->con->pdo,$email,$password);
}
if($type=="Formateur"){
    $user=Formateur::login($this->con->pdo,$email,$password);
} 
if($type=="Stagiaire"){
    $user=Stagiaire::login($this->con->pdo,$email,$password);
}
if($user==false){
   return false;
}

   
    $_SESSION["user"]=serialize($user);
    return true ;

}
public  function versLogin(){
    header("Location:../Views/login.php?Invalide=false");
}
public  function versMenu(){
    header("location:../Views/menu.php");
}}
?>