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
<!--    <div class="preloader">
      <div class="preloader-logo"><img src="<?php echo BASE_URL?>public/img/peque.jpg" alt="" width="151" height="44" srcset="images/logo-default-151x44.png 2x"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div> -->

<div class="page">
  <?php if (session::get('autenticado') && $this->_controlador != 'carga_propiedad' ): ?>
      <a href="<?php echo BASE_URL ?>carga_propiedad">
      <div class="botonF1">
        <span>+</span>
      </div>
      </a>
  <?php endif; ?>
         <!-- Page Header template de tico   
        AIzaSyAuC3tFNMyjX1MM7lOfxN3F05IxytI8HMw
        -->
      <header class="section novi-background page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
          <div class="rd-navbar-aside-outer">
            <div class="row">
              <div class="boton-navegacion">
                  <!-- RD Navbar Toggle -->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
              </div>
               <div class="logo-navegacion-peq">
                  <img class="logoo" src="<?php echo BASE_URL?>public/img/logo2.gif" alt="" width="" height=""/>
              </div>
            </div>
          </div> 
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item "><a class="rd-nav-link" href="<?php echo BASE_URL ?>">Home</a>
                    </li>
                    <?php if (session::get('autenticado')): ?>
                      
                      <li class="rd-nav-item "><a class="rd-nav-link" href="<?php echo BASE_URL ?>listar">Mis publicaciones</a>
                    </li>
                    <?php endif; ?>
                   <!--  <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About us</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                    </li> -->
                    <li class="rd-nav-item boton-usuario-login">
                      <?php if (session::get('autenticado')): ?>                
                      <div class="dropdown">
                        <button class="rd-nav-link dropdown-toggle btn-usuario" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div id="avatar-mini" style="background-image: url(<?php  echo BASE_URL.session::get('foto'); ?>); background-size: contain;"></div>
                          <input type="text" hidden id="email-usuario" value="<?php echo session::get('email'); ?>">
                          <?php echo session::get('email'); ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="<?php echo BASE_URL; ?>recuperar/cambiar">Cambiar Contraseña</a>
                          <a class="dropdown-item" href="<?php echo BASE_URL; ?>perfil/" >Perfil</a>
                          <a class="dropdown-item" href="<?php echo BASE_URL; ?>login/cerrar">Cerrar Sesión</a>
                        </div>
                      </div>
                      <?php else: ?>

                        <li class="rd-nav-item boton-usuario-login-no-login"><a class="rd-nav-link" href=<?php BASE_URL ?>"login"><i class="fa fa-user" aria-hidden="true"></i> Iniciar Sesion</a>
                        </li>



                      <?php endif; ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </nav>
        </div>
      </header>


 <!-- Page Header fin template de tico   
AIzaSyAuC3tFNMyjX1MM7lOfxN3F05IxytI8HMw
-->


