

</div>
            
 <!-- Publicos -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>

<script src="<?php echo BASE_URL; ?>public/js/jquery.js" type="text/javascript"></script>

<script src="<?php echo BASE_URL; ?>public/js/config.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL; ?>public/js/jquery.validationEngine.js" type="text/javascript"></script>

<script src="<?php echo BASE_URL; ?>public/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo $_layoutParams['ruta_js']; ?>materialize_custom.js" type="text/javascript"></script>
<script src="<?php echo $_layoutParams['ruta_js']; ?>core.min.js" type="text/javascript"></script>
<script src="<?php echo $_layoutParams['ruta_js']; ?>script.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>


  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Plugin JavaScript -->
<!-- Custom Theme JavaScript -->
<!--  Js del layout  -->
 
<!--  Js de la vista  -->
<?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
    <?php for($i=0; $i < count($_layoutParams['js']); $i++): ?>
        <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
    <?php endfor; ?>
<?php endif; ?>

</body>

</html>