<?php
class construController extends Controller{
	private $_principal;
    public function __construct() {
        parent::__construct();
  	 		
    }

    public function index(){
      
      $this->_view->setJs(array('index'));
		  $this->_view->setCss(array('css'));
       $this->_view->titulo = 'pag en construccion';
		  $this->_view->renderizar('index');
	  }	
	
}
?>