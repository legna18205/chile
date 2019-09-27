<?php
class listarModel extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function mis_publicaciones($usuarioo){


        $id = $this->_db->query(
                    "select id_usuario from usuario where email = '$usuarioo'"
        ); 

        $id = $id->fetch();

        $id=$id[0];

        $usuario = $this->_db->query(
                    "SELECT * from propiedad where id_usuario = '$id' and activo=1"
        );                    
        $pub = $usuario->fetchall();
            for ($i=0; $i < count($pub) ; $i++) { 
                $fotos= $this->_db->query(
                    "select * from fotos where id_publicacion = '".$pub[$i]['id_propiedad']."'"
                );
                $pub[$i]['fotos']=$fotos->fetchall();
            }
        return $pub;
    }
    public function verificarEmail($email){
        $id_usuario = $this->_db->query(
                "select id_usuario from usuario where email = '$email'"
        );        
        if($id_usuario->fetch()){
            return true;
        }        
        return false;
    }

    public function eliminarpublicacion($id){
        $sql="UPDATE propiedad SET activo=0  WHERE id_propiedad=$id";
        $resultado = $this->_db->query($sql);
        if(!$resultado){
            return 0;
        }
        $resultado = $resultado->rowCount();
        return $resultado;
    }
        
}?>