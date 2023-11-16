<?php 
require_once "Controller.php"; 
class FormateurController extends Controller{
public function ListerModuleEtGroupe($fr){
  $module = $fr->SelectionneModuleParFormateur($this->con->pdo);
   $groupe = $fr->SelectionneGroupeParFormateur($this->con->pdo);
   require_once "Views/FormateurViews/AjouterExamFr.php";
}
public function AjouterExam($fr,$module){
  require_once("Views/FormateurViews/FormAjouterExam.php");
  if($_GET["Submited"]=="oneline-added"){
   $res =  $fr->AjouterExamen($this->con->pdo,$_POST["lib"], $_POST["lib"], $module,$_POST["Cptc"],$_POST["PassDate"],$_POST["D"],$_POST["QN"],$_POST["QPN"],$_POST["PUB"]);
   if($res>0){
    header("location:index.php?AjouterQuestion=true");
   }
  }
}}
?>