<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <meta content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- etiqueta meta con el id de google para la utilizacion de el api de logueo-->
    <meta name="google-signin-client_id" content="550716738087-s3vhb8tj13t9ikus03s60co75agbgjj4.apps.googleusercontent.com">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL?>public/img/glipicon.jpg" /> -->
   
    <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
    <!--Core CSS -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
      <!--Import Google Icon Font
      <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
      --> 
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
      <!--Import materialize.css-->
       <!-- Compiled and minified CSS
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
       -->
      <!--     <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.css" rel="stylesheet" type="text/css" />-->
    <link href="<?php echo BASE_URL; ?>public/lightslider/css/lightslider.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/lightGallery/src/css/lightgallery.css" rel="stylesheet" type="text/css" /> 
      <!-- Custom CSS -->
    <link href="<?php echo $_layoutParams['ruta_css']; ?>layout.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>style.css" rel="stylesheet" type="text/css" id="main-styles-link" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>nav.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>taps.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>seccion-centro.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>public/css/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>public/css/alertify.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BASE_URL; ?>public/css/alertify.core.css" rel="stylesheet" type="text/css" />
    <!-- CSS de la vista, se cargan de manera dinamica los archivos css que tenga la vista definida en su carpeta css y es llamado en el contralador de cada vista..  -->
    <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++): ?>
            <link href="<?php echo $_layoutParams['css'][$i] ?>" rel="stylesheet" type="text/css" />
        <?php endfor; ?>
    <?php endif; ?>
</head>

<body id="page-top">
<div class="loader"></div>

<div class="page">
  <?php if (session::get('autenticado') && $this->_controlador != 'carga_propiedad' ): ?>
      <a href="<?php echo BASE_URL ?>carga_propiedad">
      <div class="botonF1">
        <span>+</span>
      </div>
      </a>
  <?php endif; ?>

 
      <header>
            <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
                 <div class="mx-auto order-0 ">
                    <a class="navbar-brand " href="<?php echo BASE_URL; ?>">
                      <img   src="<?php echo BASE_URL?>public/img/logos/prop2.png" alt="" width="150" height="auto"/>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        
                         <?php if (session::get('autenticado')): ?>
                                  
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo BASE_URL.'listar/index/'.Session::get('email'); ?>">Mis publicaciones
                                    </a>
                                </li>
                                <?php endif; ?>
                    </ul>
                </div>
               
                <div class="navbar-collapse collapse w-100 order-0 dual-collapse2">
                   <span class="navbar-text order-sm-first">
                      <?php echo "UF: ".number_format($this->uf,2,",",".") ?>
                      
                    </span>
                    <ul class="navbar-nav ml-auto ">

                        <?php if (session::get('autenticado')): ?>
                          <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div id="avatar-mini" style="background-image: url(<?php  echo BASE_URL.session::get('foto'); ?>); background-size: contain;"></div>
                                    <?php echo session::get('email'); ?>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>perfil/" >Perfil</a>
                                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>recuperar/cambiar">Cambiar Contraseña</a>
                                    
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo BASE_URL; ?>login/cerrar">Cerrar Sesión</a>
                                  </div>
                          </li>
                        <?php else: ?>
                          <li class="nav-item">
                            <a class="nav-link" href="<?php echo BASE_URL ?>login"><i class="fa fa-user" aria-hidden="true"></i> Iniciar Sesion</a>
                          </li>

                        <?php endif; ?>

                    </ul>
                </div>
            </nav>
      </header>
      <section class="section section-md">
 <input type="text" hidden id="email-usuario" value="<?php echo session::get('email'); ?>">
 <!-- Page Header fin template de tico   
AIzaSyAuC3tFNMyjX1MM7lOfxN3F05IxytI8HMw
-->


