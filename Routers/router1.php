<?php 
    session_start();
    require_once "../Controller/AthentController.php";
    $authentifant=new AthentController();

    if(isset($_POST["email"],$_POST["pass"],$_POST["type"])){
   $resul= $authentifant->store($_POST["email"],$_POST["pass"],$_POST["type"]);
        if($resul)
            $authentifant->versMenu();
        
        else
            $authentifant->versLogin();

        
    }else   
     $authentifant->versLogin();

    

?>