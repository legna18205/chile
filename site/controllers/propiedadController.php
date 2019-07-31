<?php

class propiedadController extends Controller
{
    private $_propiedad;
    
    public function __construct(){
        parent::__construct();        
        $this->_propiedad = $this->loadModel('propiedad');
    }
    
    public function index(){
		//$this->_view->area_l="apagada";
		//$this->_view->area_r="apagada";

        /*if(Session::get('autenticado')){
            $this->redireccionar();
        }*/     
           
        
        $this->_view->titulo = 'propiedad';
       	//$this->_view->setJs(array('js','validate'));
        $this->_view->setJs(array('index'));
        $this->_view->setCss(array('index'));
        
       
       $this->_view->renderizar('index');
     
}
    public function carga(){
        //$this->_view->area_l="apagada";
        //$this->_view->area_r="apagada";

        /*if(Session::get('autenticado')){
            $this->redireccionar();
        }*/     
           
        
        $this->_view->titulo = 'propiedad';
        //$this->_view->setJs(array('js','validate'));
        $this->_view->setJs(array('dropzone','carga'));
        $this->_view->setCss(array('css-carga'));
        
       
       $this->_view->renderizar('carga');
     
}

    public function upfile(){
       
        $this->getLibrary('simpleimage');
      
       $ruta="public/img/propiedades500/".$_FILES['file']['name'];
       $ruta60="public/img/propiedades64/".$_FILES['file']['name'];
       move_uploaded_file($_FILES['file']['tmp_name'], $ruta);
   
       copy($ruta,$ruta60);
       
        $image = new SimpleImage();
        $image->load($ruta60);
        $image->resize(64,42);
        $image->save($ruta60);
      
        
     
}

      



}

?>