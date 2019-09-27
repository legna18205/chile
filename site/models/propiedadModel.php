<?php
class propiedadModel extends Model{
    public function __construct() {
        parent::__construct();
    }       


    function regioness(){
    	$sql="SELECT * FROM `regiones` ";
		$datos = $this->_db->query($sql);        
        return $datos->fetchall();
    }

    function provincias($id){
    	$sql="SELECT * FROM `provincias` where region_id='$id' ";
		$datos = $this->_db->query($sql);        
        return $datos->fetchall();
    }
    function comuna($id){
    	$sql="SELECT * FROM `comunas` where provincia_id='$id' ";
		$datos = $this->_db->query($sql);        
        return $datos->fetchall();
    }
    function guardar2($datos){
        $sql ="INSERT into propiedad values('','".session::get('id_usuario')."',CURDATE(),'".$datos['region']."','".$datos['provincia']."','".$datos['comuna']."','".$datos['direccion']."','".$datos['referencia']."','".$datos['titulo']."','".$datos['Precio']."','".$datos['contrato']."','".$datos['espacio']."','".$datos['cantp']."','".$datos['cantb']."','".$datos['Canta']."','".$datos['descrip']."','','',0,'1')";
        $datos = $this->_db->query($sql);
    }
    function guardar($datos,$fotos){

        $sql ="INSERT into propiedad values('','".session::get('id_usuario')."',CURDATE(),'".$datos['region']."','".$datos['provincia']."','".$datos['comuna']."','".$datos['direccion']."','".$datos['referencia']."','".$datos['titulo']."','".$datos['Precio']."','".$datos['contrato']."','".$datos['espacio']."','".$datos['cantp']."','".$datos['cantb']."','".$datos['Canta']."','".$datos['descrip']."','','',0,'1')";
       	$this->_db->query($sql);
    	$id=$this->_db->lastInsertId();
    	for ($i=0; $i < count($fotos['grande']) ; $i++) { 
            $sql ="INSERT into fotos values('','".$id."','".$fotos['grande'][$i]."','".$fotos['pequena'][$i]."')";
       		$this->_db->query($sql);
       	}
    }
    function actualiza($datos,$fotos){
        $sql ="UPDATE propiedad set
                region='".$datos["region"]."',
                provincia='".$datos["provincia"]."',
                comuna='".$datos["comuna"]."',
                direccion='".$datos["direccion"]."',
                referencia='".$datos["referencia"]."',
                titulo='".$datos["titulo"]."',
                Precio='".$datos["Precio"]."',
                contrato='".$datos["contrato"]."',
                espacio='".$datos["espacio"]."',
                cantp='".$datos["cantp"]."',
                cantb='".$datos["cantb"]."',
                Canta='".$datos["Canta"]."',
                descrip='".$datos["descrip"]." '
            WHERE id_propiedad=".$datos["id"]." ";
            $this->_db->query($sql);
            for ($i=0; $i < count($fotos['grande']) ; $i++) {       
                $sql ="INSERT into fotos values('','".$datos["id"]."','".$fotos['grande'][$i]."','".$fotos['pequena'][$i]."')";
                $this->_db->query($sql);
            }
    }
    function actualiza2($datos){
        $sql ="UPDATE propiedad set
                        region='".$datos["region"]."',
                        provincia='".$datos["provincia"]."',
                        comuna='".$datos["comuna"]."',
                        direccion='".$datos["direccion"]."',
                        referencia='".$datos["referencia"]."',
                        titulo='".$datos["titulo"]."',
                        Precio='".$datos["Precio"]."',
                        contrato='".$datos["contrato"]."',
                        espacio='".$datos["espacio"]."',
                        cantp='".$datos["cantp"]."',
                        cantb='".$datos["cantb"]."',
                        Canta='".$datos["Canta"]."',
                        descrip='".$datos["descrip"]." '
                   WHERE id_propiedad=".$datos["id"]." "; 
        $this->_db->query($sql);
    }
    function datos_propiedad($id){
        $sql ="UPDATE propiedad set visitas = (propiedad.visitas + 1) where id_propiedad ='$id' ";
        $this->_db->query($sql);

        $sql ="SELECT * from propiedad where id_propiedad ='$id'";
        $datos = $this->_db->query($sql);
        return $datos->fetch();
    }
    public function datos_fotos($id){
        $sql="SELECT fotos.* FROM 
              fotos 
              WHERE id_publicacion=$id";
        $datos = $this->_db->query($sql);
        return $datos->fetchall();
    }
    public function traer_propiedades($id){
        $sql ="UPDATE propiedad set visitas = (propiedad.visitas + 1) where id_propiedad ='$id' ";
        $this->_db->query($sql);
        $usuario = $this->_db->query(
                    "SELECT * from propiedad where id_propiedad = '$id'"
        );                    
        $pub = $usuario->fetchall();
            for ($i=0; $i < count($pub) ; $i++) { 
                $fotos= $this->_db->query(
                    "SELECT * from fotos where id_publicacion = '".$pub[$i]['id_propiedad']."'"
                );
                $pub[$i]['fotos']=$fotos->fetchall();
            }
        return $pub;
    }
    public function delete_foto($id){
        $sql="delete from fotos where id_fotos='$id'";       
         $resultado = $this->_db->query($sql);
        if(!$resultado){
            return 0;
        }
        $resultado = $resultado->rowCount();
        return $resultado;
    }

    public function traer_propiedad_siguiente($id){
        $sql="SELECT id_propiedad FROM propiedad 
                     WHERE 
                     id_propiedad = (SELECT MIN(id_propiedad) FROM propiedad WHERE id_propiedad > $id)"; 
        $usuario = $this->_db->query($sql);                    
        $pub = $usuario->fetch();
        return $pub;
    }

    public function traer_propiedad_anterior($id){
        $sql="SELECT id_propiedad FROM propiedad 
                     WHERE 
                     id_propiedad = (SELECT MAX(id_propiedad) FROM propiedad WHERE id_propiedad < $id)"; 
        $usuario = $this->_db->query($sql);                    
        $pub = $usuario->fetch();
        return $pub;
    }
}
?>