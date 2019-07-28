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
        
       
       $this->_view->renderizar('index', 'propiedad');
     
}

}

?>