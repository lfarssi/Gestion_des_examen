<?php 
class Formateur{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public static function login($con,$email,$password){
        $sql="SELECT * FROM formateur WHERE email=?";
        $PdoSt=$con->prepare($sql);
        $PdoSt->execute([$email]);
        $formateur=$PdoSt->fetchObject(Formateur::class);


        if($PdoSt->rowCount()>0){
            if($formateur->password==$password)
                     return $formateur;
            
        }
    return false;
    }
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
    public function SelectionneModuleParFormateur($con){
        $sql="SELECT m.lib FROM module as m  WHERE id in  
        (select idModule from module_assurer where idFormateur=?)";
        $PdoSt=$con->prepare($sql);
        $PdoSt->execute([$this->id]);
        return $PdoSt->fetchAll(PDO::FETCH_OBJ);

    }
    public function SelectionneGroupeParFormateur($con){
        $sql="SELECT g.lib FROM groupe as g  WHERE id in  
        (select idGroupe from module_assurer where idFormateur=?) ";
        $PdoSt=$con->prepare($sql);
        $PdoSt->execute([$this->id]);
        return $PdoSt->fetchAll(PDO::FETCH_OBJ);
   
    }
    public function AjouterExamen($con,$id,$lib,$idmod,$idcpt,$Pdt,$dr,$NQ,$NQP,$pub){
        $curdate=date("Y-m-j");
        $sql="INSERT INTO examen VALUES (?,?,?,?,?,?,?,?,?,?,?,?) ";
        $PdoSt=$con->prepare($sql);
        $PdoSt->execute([$id,$lib,$idmod,$idcpt,$curdate,$Pdt,$dr,$NQ,$NQP,$this->id,"oui",$pub]);
        return $PdoSt->rowCount();
   
    }
}
?>