<?php

class propiedadController extends Controller
{
    private $_propiedad;
    
    public function __construct(){
        parent::__construct();        
        $this->_propiedad = $this->loadModel('propiedad');
    }
    
    public function index($id=false){
		  //$this->_view->area_l="apagada";
		  //$this->_view->area_r="apagada";
      /*if(Session::get('autenticado')){
            $this->redireccionar();
      }*/
      $this->_view->titulo = 'Propiedad';
      if (isset($id)) {
        $this->_view->bn=1;
        $this->_view->datos =  $this->_propiedad->datos_propiedad($id);
        $this->_view->fotos =  $this->_propiedad->datos_fotos($id);
      }else{
        $this->_view->bn=0;
      }
      //$this->_view->setJs(array('js','validate'));
      $this->_view->setJs(array('index'));
      $this->_view->setCss(array('index'));
      $this->_view->renderizar('index');

    }

      
      
        
     
    }   





?>