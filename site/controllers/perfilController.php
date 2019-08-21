<?php
class perfilController extends Controller{
    private $_perfil;
    
    public function __construct() {
        parent::__construct();        
        $this->_perfil = $this->loadModel('perfil');
    }
    
    public function index(){
        if(!Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->usuario=$this->_perfil->get_perfil(session::get('id_usuario'));
        $this->_view->titulo = 'Perfil';
       	//$this->_view->setJs(array('js','validate'));
        $this->_view->setJs(array('dropzone','index'));
        $this->_view->setCss(array('index'));       
        $this->_view->renderizar('index', 'perfil');     
    }

    public function cambiar_imagen(){
        $email = session::get('email');
        $ruta="public/img/profile/".$email.".jpg";
        unlink($ruta);
        move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
    }

    public function actualizar_datos(){
        echo json_encode($this->_perfil->actualizar_datos($_REQUEST));
    }
}
?>