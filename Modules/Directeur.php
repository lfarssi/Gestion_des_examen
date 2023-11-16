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
        $directeur=$PdoSt->fetchObject(Directeur::class);


        if($PdoSt->rowCount()>0){
            if($directeur->password==$password)
                     return $directeur;
            
        }
    return false;
    }
}
?>