<?php 
class Directeur{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $password;
    public static function login($con,$email,$password){
        $sql="SELECT * FROM directeur WHERE email=?";
        $PdoSt=$con->prepare($sql);
        $PdoSt->execute([$email]);


        if($PdoSt->rowCount()>0){
        $directeur=$PdoSt->fetchObject(Directeur::class);

            if($directeur->password==$password)
                    return $directeur;
            
        }
    return false;
    }
    public function __toString(){
        return $this->nom." ".$this->prenom;
    }

    
}
?>