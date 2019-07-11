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
    
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    
    
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.structure.css" rel="stylesheet" type="text/css" /> 
    <link href="<?php echo BASE_URL; ?>public/css/jquery-ui.theme.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo $_layoutParams['ruta_css']; ?>layout.css" rel="stylesheet" type="text/css" />
    
    
    <!-- CSS view.. -->
    <?php if(isset($_layoutParams['css']) && count($_layoutParams['css'])): ?>
        <?php for($i=0; $i < count($_layoutParams['css']); $i++): ?>
            <link href="<?php echo $_layoutParams['css'][$i] ?>" rel="stylesheet" type="text/css" />
        <?php endfor; ?>
    <?php endif; ?> 
</head>

<body id="page-top">
    <div class="navbar-fixed black">
    <nav class="black">
    <div class="nav-wrapper black ">
      <a href="#!" class="brand-logo contlogo"><img id="logo" class="responsive-img" src="<?php echo BASE_URL; ?>public/img/peque.gif"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger black"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down black">
      <!-- menu para pc--> 
        <li><a href="sass.html" class=" waves-effect ">propiedades</a></li>
        <li><a href="badges.html" class="waves-effect">Contactanos</a></li>
        <li><a href="collapsible.html" class="waves-effect">Mision y Vision</a></li>
        <li><a href="mobile.html" class="waves-effect">Usuario<i class="material-icons right">person</i></a></li>
      
      </ul>
    </div>
  </nav>
</div>



  <!-- menu para telefonos -->
  <ul class="sidenav" id="mobile-demo">
 <li><a href="sass.html">propiedades chupalo</a></li>
        <li><a href="badges.html">Contactanos</a></li>
        <li><a href="collapsible.html">Mision y Vision</a></li>
        <li><a href="mobile.html">Usuario<i class="material-icons right">person</i></a></li>
      
  </ul>

<div class="posnavar">
    <div class="container">
        <div class="row">
            <div class="col m12">
                <h2 class="center-align letras-pag">La forma mas facil de optener tu hogar...</h2>
                 <nav>
            <div class="nav-wrapper">
              <form>
                <div class="input-field z-depth-5 indigo darken-1">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
            </nav>
            </div>
        </div>
    </div>
</div>

        
