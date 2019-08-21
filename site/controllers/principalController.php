<?php
class principalController extends Controller{
	private $_principal;
    public function __construct() {
        parent::__construct();
  	 	$this->_principal=$this->loadModel('principal');	
    }

    public function index(){
      $this->_view->propiedades=$this->_principal->traer_publicacion();
      for ($i=0; $i <count($this->_view->propiedades) ; $i++) { 
        $this->_view->propiedades[$i]['fotos']=$this->_principal->traer_img($this->_view->propiedades[$i]['id_propiedad']);
      }

    	
      $this->_view->setJs(array('index'));
		  $this->_view->setCss(array('css'));
       $this->_view->titulo = 'index';
		  $this->_view->renderizar('index');
	  }	
	
}
?>