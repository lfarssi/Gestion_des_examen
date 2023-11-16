<?php 
require_once "Controller.php";
require "../Modules/Directeur.php";
require "../Modules/Formateur.php";
require "../Modules/Stagiaire.php";
class AthentController extends Controller{
public function store($email,$password,$type){
    session_start();
if($type=="Directeur"){
   
    $user=Directeur::login($this->con->pdo,$email,$password);
}
if($type=="Formateur"){
   
    $user=Formateur::login($this->con->pdo,$email,$password);
}
if($type=="Stagiaire"){
   
    $user=Stagiaire::login($this->con->pdo,$email,$password);
}
   
if(!$user){
   return false;
}

   
    $_SESSION["user"]=serialize($user);
    return true;

}
}
?>