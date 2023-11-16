<?php 
class Connexion{
    public $pdo;
   
    public function __construct(){
        $this->pdo=new PDO("mysql:host=localhost;dbname=xbhnnqyb_QuizAppDB","root","");
    }
}

?>