<?php
class loginController extends Controller{
    private $_login;
    
    public function __construct(){
        parent::__construct();
        $this->_login = $this->loadModel('login');
    }
    
    public function index(){        
        if(Session::get('autenticado')){
            $this->redireccionar('principal');
        }
        
        $this->_view->titulo = 'Iniciar Sesion';
        $this->_view->setJs(array('js','login'));
        $this->_view->setCss(array('css','login'));

        if(isset($_POST['enviar'])){
            $this->_view->datos = $_POST;
            $row = $this->_login->getUsuario(
                    $_POST['usuario'],
                    $_POST['pass']
                    );
            
            if(!$row){
                $this->_view->_error = 'Usuario y/o password incorrectos';
                $this->_view->renderizar('index');
                exit;
            }
            
            /*if($row['estado'] != 1){
                $this->_view->_error = 'Este usuario no esta habilitado';
                $this->_view->renderizar('index','login');
                exit;
            }*/
           //print_r($row);
                        
            Session::set('autenticado', true);
            Session::set('role', $row['id_role']);
            Session::set('foto', $row['foto']);
            Session::set('email', $row['email']);
            Session::set('usuario', $row['login']);
            Session::set('id_usuario', $row['id_usuario']);
            Session::set('tiempo', time());
            $this->_view->_usuario=$row['email'];
           $this->redireccionar();
        }
        
        $this->_view->renderizar('index');
        
    }
    
    public function login_google(){
       // echo json_encode($_GET);
        $row = $this->_login->getUsuario_google(
                    $_POST['email']                    
                    );


        if(!$row){
                $newpass=uniqid();
                $corte = explode("@", $_POST['email']);
                $login=$corte[0];
                $this->_login->registrarUsuario(
                    $_POST['foto'],
                    $_POST['email'],
                    $_POST['nombre'],
                    $newpass, 
                    $login                   
                    );
                $this->email($_POST['email'],$_POST['nombre'],'Google',$newpass,$login);
            }
                $imagen = file_get_contents($_POST['foto']);
                $url='public/img/profile/'.$_POST['email'].'.jpg';
                //echo $url;
                file_put_contents($url, $imagen);
                    

                    $this->_login->actualizar_foto_google(
                    $url,
                    $_POST['email']                    
                    );
        $row = $this->_login->getUsuario_google(
                    $_POST['email']                    
                    );
            
            



            
            Session::set('autenticado', true);
            Session::set('role', $row['id_role']);
            Session::set('email', $row['email']);
            Session::set('usuario', $row['login']);
            Session::set('foto', $row['foto']);
            Session::set('id_usuario', $row['id_usuario']);
            Session::set('tiempo', time());
            echo json_encode($row);
    }
    

    public function cerrar(){
        Session::destroy();
        $this->redireccionar('login');
    }

    public function email($email,$nombre,$tipo,$clave,$login){
            
            //configuracion del servidor de correo///
            $this->getLibrary('class.phpmailer');
            $mail = new PHPMailer();
            $mail->IsSMTP(); 
            $mail->SMTPDebug  = 1;                   
            $mail->SMTPAuth   = true; 
            $mail->SMTPSecure = "tls";               
            $mail->Host       = "mail.propiedadesya.com";
            //datos del servidor de email
            $mail->Username   = "propiedadesya@propiedadesya.com";       
            $mail->Password   = "Xsg162**";        
            $mail->SetFrom('propiedadesya@propiedadesya.com');
            //$mail->AddReplyTo("prccnoreply@gmail.com","prcc");
            //asunto    
            $mail->Subject = 'aviso propiedadesya';
            //mensaje
            $mail->Body = 'Hola ' . $nombre . ',' .
                            ' Se le ha creado una cuenta en PropiedadesYa como '.$login.' por medio de '.$tipo.' su clave ' .
                            'es la siguiente:' . $clave;

            $mail->AddAddress($email);
            
            $mail->Send();
    }
}

?>
