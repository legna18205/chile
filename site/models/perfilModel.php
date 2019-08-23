<?php
class perfilModel extends Model{
    public function __construct() {
        parent::__construct();
    }

    function get_perfil($id){
    	$sql="SELECT usuario.*, persona.* FROM `usuario` 
    		  INNER JOIN persona on usuario.id_usuario=persona.per_usu_codigo 
    		  WHERE usuario.id_usuario='$id' ";
		$datos = $this->_db->query($sql);        
        return $datos->fetch();
    }

    function actualizar_datos($datos){
        $sql="UPDATE persona SET
    	per_nombre='".$datos['nombre_usuario']."',
    	per_rut='".$datos['rut_usuario']."',
    	per_telefono='".$datos['telefono_usuario']."',
    	per_obs='".$datos['obs_usuario']."'
    	WHERE per_usu_codigo='".session::get('id_usuario')."'
    	";
    	$datos = $this->_db->query($sql);
        if(!$datos){
            return 0;
        }
        $datos = $datos->rowCount();
        return $datos;
    }
     
}?>