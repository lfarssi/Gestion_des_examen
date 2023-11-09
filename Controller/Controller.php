<?php 
include_once '../Modeles/Connexion.php';
class Controller{
    protected $con;
    public function __construct(){
        $this->con=new Connexion();
    }
}

?>