<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="text/html">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php if(isset($this->titulo)) echo $this->titulo; ?></title>
    <!--Core CSS -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800%7CPoppins:300,400,700">
      <!--Import Google Icon Font
      <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      Import materialize.css-->
       <!-- Compiled and minified CSS
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     -->
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.structure.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.theme.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo $_layoutParams['ruta_css']; ?>layout.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_layoutParams['ruta_css']; ?>fonts.css" rel="stylesheet" type="text/css" />
    <!-- CSS view.. -->
    <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++): ?>
            <link href="<?php echo $_layoutParams['css'][$i] ?>" rel="stylesheet" type="text/css" />
        <?php endfor; ?>
    <?php endif; ?> 
</head>

<body id="page-top">



<div class="page">

         <!-- Page Header template de tico   
        AIzaSyAuC3tFNMyjX1MM7lOfxN3F05IxytI8HMw
        -->
      <header class="section novi-background page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-lg-stick-up="true" data-lg-stick-up-offset="118px" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xl-stick-up="true" data-xl-stick-up-offset="118px" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-xxl-stick-up-offset="118px" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.html"><img src="images/logo-default-151x44.png" alt="" width="151" height="44" srcset="images/logo-default-151x44.png 2x"/></a>
                </div>
                <div class="rd-navbar-collapse">
                  <button class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle="#rd-navbar-collapse-content-1"><span></span></button>
                  <div class="rd-navbar-collapse-content" id="rd-navbar-collapse-content-1">
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-phone"></span></div>
                      <div class="unit-body">
                        <ul class="list-0">
                          <li><a class="link-default" href="tel:#">1-800-1234-567</a></li>
                          <li><a class="link-default" href="tel:#">1-800-8763-765</a></li>
                        </ul>
                      </div>
                    </article>
                    <article class="unit align-items-center">
                      <div class="unit-left"><span class="icon novi-icon icon-md icon-modern mdi mdi-map-marker"></span></div>
                      <div class="unit-body"><a class="link-default" href="tel:#">2130 Fulton Street <br> San Diego, CA 94117-1080</a></div>
                    </article><a class="button button-gray-bordered button-winona" href="#">Request a call</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About us</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>

</div>
 <!-- Page Header fin template de tico   
AIzaSyAuC3tFNMyjX1MM7lOfxN3F05IxytI8HMw
-->


