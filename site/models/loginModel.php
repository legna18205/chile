<?php

class loginModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($usuario, $password)
    {

     $datos = $this->_db->query( 
                "select * from usuario " .
                "where login = '$usuario' " .
                "and password = '" . Hash::getHash('sha1', $password, HASH_KEY) ."'"
                );
        
        return $datos->fetch();
    }
    public function getUsuario_google($email)
    {
        $sql="select * from usuario " .
                "where email = '$email' ";
     $datos = $this->_db->query( $sql );
        
        return $datos->fetch();
    }
    public function registrarUsuario($foto,$email,$nombre)
    {

        
        
       

         $sql="insert into usuario values ('','$foto','2', '$email','','','1','$nombre')";
        $this->_db->query($sql);
         
        
        
            
                
    
    }

    public function actualizar_foto_google($foto,$email)
    {

        
        
       

        $sql="update usuario set foto='$foto' where email='$email'";
        $this->_db->query($sql);
         
        
        
            
                
    
    }
}

?>
