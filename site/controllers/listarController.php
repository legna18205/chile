<?php
class listarController extends Controller{
    private $_listar;
    
    public function __construct() {
        parent::__construct();        
        $this->_listar = $this->loadModel('listar');
    }
    
    public function index(){
        if(!Session::get('autenticado')){
            $this->redireccionar();
        }
        $this->_view->titulo = 'listar';
        $this->_view->setJs(array('index'));
        $this->_view->setCss(array('index'));
        $this->_view->_publicacion=$this->_listar->mis_publicaciones();
        $this->_view->renderizar('index');
    }

    public function eliminarpublicacion(){
        echo json_encode($this->_listar->eliminarpublicacion($_REQUEST['id']));
    }
    
}
?>