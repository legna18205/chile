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
        if (!$array) {
          $this->redireccionar('error/index/963'); 
        }elseif ($array['id_usuario']!=Session::get('id_usuario')) {
         $this->redireccionar('error/index/964');
        }

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
        $array['prueba'][$i]=$prueba="public/img/prueba/".$_FILES['file']['name'][$i];

        move_uploaded_file($_FILES['file']['tmp_name'][$i], $ruta);
        // copy($ruta,$ruta60);
        $image = new SimpleImage();
        $image->load($ruta);
        //-----
        $h=$image->get_height();
        $w=$image->get_width();
        
        //-----
        $min = ($h < $w) ? $h : $w ;
        $max = ($h > $w) ? $h : $w ;

        $resto=$max-$min;

        $lados = ($resto/2);

        echo "max:".$max." -- >min:".$min;
        echo "---h:".$h." -- >w:".$w;
        echo "---resto:".$resto." -- >lados:".$lados;
        if($max==$w){
          $image->crop($lados,0,($w-$lados),$h);
        }
        else{
          $image->crop(0,$lados,$w,($h-$lados));
        }
        $image->resize(450,450);
        $image->save($grande);
        $image->resize(80,80);
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

    public function uf(){
      $fecha=date('d-m-Y');
      
        $cliente = curl_init();
  curl_setopt($cliente, CURLOPT_URL, "https://mindicador.cl/api/uf/".$fecha);
  curl_setopt($cliente, CURLOPT_HEADER, 0);
  //curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 

  $contenido = curl_exec($cliente);
  curl_close($cliente);

  echo json_encode($contenido);

    } 

}
?>