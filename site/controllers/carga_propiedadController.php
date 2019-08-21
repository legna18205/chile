<?php
class carga_propiedadController extends Controller{
    private $_propiedad;
    
    public function __construct(){
        parent::__construct();        
        $this->_propiedad = $this->loadModel('propiedad');
    }

    
    
    public function index($id=false){

      if(!Session::get('autenticado')){
      $this->redireccionar();
      }

      if ($id!=false) {
    
        $this->_view->bn ='1';
        $this->_view->id=$id;
        
        $array = $this->_propiedad->datos_propiedad($id);
        $array['fotos']=$this->_propiedad->datos_fotos($id);
        $this->_view->datos=$array;
        
       
      }else{
        
        $this->_view->bn ='0';
        $this->_view->id='0';
      }      
      
      //$this->_view->area_l="apagada";
      //$this->_view->area_r="apagada";
      

      $this->_view->titulo = 'cargar';
      //$this->_view->setJs(array('js','validate'));
      $this->_view->setJs(array('dropzone','carga'));
      $this->_view->setCss(array('css-carga'));
      $this->_view->_regiones=$this->_propiedad->regioness();
      $this->_view->renderizar('index');

      
      //print_r($this->_view->_regiones);
    }
  

    public function upfile(){


      $this->getLibrary('simpleimage');


      for ($i=0; $i < count($_FILES['file']['name']) ; $i++) {      

        $array['grande'][$i]=$ruta="public/img/propiedades500/".$_FILES['file']['name'][$i];
        $array['pequena'][$i]=$ruta60="public/img/propiedades64/".$_FILES['file']['name'][$i];

        move_uploaded_file($_FILES['file']['tmp_name'][$i], $ruta);
        // copy($ruta,$ruta60);
        $image = new SimpleImage();
        $image->load($ruta);
        $image->resize(64,42);
        $image->save($ruta60);
      }

      if ($_POST['bn']==0) {
      $this->_propiedad->guardar($_POST,$array);
     
      }else{
       
      $this->_propiedad->actualiza($_POST,$array);
      }
    } 

    
    public function upfile2(){
     if ($_POST['bn']==0) {
      $this->_propiedad->guardar2($_POST);
   
      }else{
       
      $this->_propiedad->actualiza2($_POST);
      }
      
    }  

    public function provincias(){
      echo json_encode($this->_propiedad->provincias($_POST['id']));
    }

    public function comuna(){
      echo json_encode($this->_propiedad->comuna($_POST['id']));
    } 
    public function delete_foto(){
      echo json_encode($this->_propiedad->delete_foto($_POST['id']));
    } 

}
?>