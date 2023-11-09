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
}
?>