<?php
class listarModel extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function mis_publicaciones(){
        $usuario = $this->_db->query(
                    "select * from propiedad where id_usuario = '".session::get('id_usuario')."'"
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

    public function eliminarpublicacion($id){
        $sql="DELETE FROM propiedad WHERE id_propiedad=$id";
        $resultado = $this->_db->query($sql);
        if(!$resultado){
            return 0;
        }
        $resultado = $resultado->rowCount();
        return $resultado;
    }
        
}?>