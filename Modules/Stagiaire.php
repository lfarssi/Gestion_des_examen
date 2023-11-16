<?php 
class Stagiaire{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public static function login($con,$email,$password){
        $sql="SELECT * FROM stagiaire WHERE email=?";
        $PdoSt=$con->prepare($sql);
        $PdoSt->execute([$email]);
        $stagiaire=$PdoSt->fetchObject(stagiaire::class);


        if($PdoSt->rowCount()>0){
            if($stagiaire->password==$password)
                     return $stagiaire;
            
        }
    return false;
    }
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }
}
?>