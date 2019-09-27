</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="top: 6%;">
      <div class="modal-header ">
        <h4 class="font-weight-bold col-10 linea" id="modal_titulo_propiedad"></h4>
        
        
        <input type="text" id="modal_id_propiedad" value='' hidden>
        <input type="text" id="modal_posicion" value='' hidden>
        <button type="button" id="cerrar_modal" class="close cerrar_modal" aria-label="Close">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
      </div>
      <div class="modal-body" style="padding-top: 0px;">
        <div class="row">
          <div class="col-lg-10 col-xl-8 margin-top div-galeria-principal">
              <div class="col-md-12">
                <ul id="lightSlider">
                </ul>
              </div>
          </div>
          <div class="col-lg-2 col-xl-4" style="padding-left: 0px !important;padding-right: 0px !important;">
            <h6 class="linea">Contacto</h6>
            <div class="col-md-12 formulario_contacto">
              <form>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nombre</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Telefono</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="telefono">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Mensaje</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-12 wow-outer">
                  <center> <a class="button button-primary button-winona button-md" href="#">
                     <div class="content-original">
                       Enviar Mensaje
                     </div>
                     <div class="content-dubbed">
                       Enviar Mensaje
                     </div>
                   </a></center>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-xl-12 wow-outer">
            <h4 class="linea">Detalles de la Propiedad</h4>

            <div class="pes row" id="pes_1">
              <div class="efectt" id="ubi">
               
              </div>
              <div class="efectt active-efectt" id="datos">
                
              </div>
            </div>



            <div class="row row-30">
                <div class="col-md-12 wow-outer">
                  <div class="wow fadeSlideInUp">
                    <ul id="modal_detalles_propiedad">
                      
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row row-30">
                <div class="col-md-12 wow-outer">
                  <div class="wow fadeSlideInUp">
                    <label class="">Descripcion</label><br>
                      <?php echo $retVal = ($this->bn==1) ? $this->datos['descrip'] : '' ; ?>
                  </div>
                </div>
              </div>
          </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary cerrar_modal">Close</button>
       
        <i class="fa fa-chevron-left " id="modal_siguiente" aria-hidden="true"></i>

        <i class="fa fa-chevron-right " id="modal_previo" aria-hidden="true"></i>
      </div>
    </div>
  </div>
</div>


<footer class="section novi-background footer-advanced bg-gray-700">
        <div class="footer-advanced-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">About Us</h5>
                <p class="footer-advanced-text">inHouse is the largest full-service real estate and property management company. We offer expertise in the marketing and sale of a wide range of properties, including residential real estate, farms and lifestyle blocks, as well as commercial and industrial properties that we hope may interest you.</p>
              </div>
              <div class="col-sm-7 col-md-5 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Recent Blog Posts</h5>
                <!-- Post Inline-->
                <article class="post-inline">
                  <p class="post-inline-title"><a href="#">Real Estate Guide: 7 Important Tips for Buying a Home</a></p>
                  <ul class="post-inline-meta">
                    <li>by Mike Barnes</li>
                    <li><a href="#">2 days ago</a></li>
                  </ul>
                </article>
                <!-- Post Inline-->
                <article class="post-inline">
                  <p class="post-inline-title"><a href="#">Single-Family Homes as a Housing Option for Young Families</a></p>
                  <ul class="post-inline-meta"> 
                    <li>by Mike Barnes</li>
                    <li><a href="#">2 days ago</a></li>
                  </ul>
                </article>
              </div>
              <div class="col-sm-5 col-md-7 col-lg-4">
                <h5 class="font-weight-bold text-uppercase text-white">Gallery</h5>
                <div class="row row-x-10" data-lightgallery="group">
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-1.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-1-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-2.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-2-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-3.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-3-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-4.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-4-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-5.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-5-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-6.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-6-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"> </div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-7.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-7-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                  <div class="col-3 col-sm-4 col-md-3"><a class="thumbnail-minimal" href="<?php echo BASE_URL ?>public/img/gallery-original-8.jpg" data-lightgallery="item"><img class="thumbnail-minimal-image" src="<?php echo BASE_URL ?>public/img/footer-gallery-8-85x85.jpg" alt=""/>
                      <div class="thumbnail-minimal-caption"></div></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout">
              <div>
                <ul class="list-nav"> 
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About</a></li>
                  <li><a href="#">Properties</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                </ul>
              </div>
              <div>
                <ul class="foter-social-links list-inline list-inline-md">
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-instagram" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-google" href="#"></a></li>
                  <li><a class="icon novi-icon icon-sm link-default mdi mdi-linkedin" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <div class="footer-advanced-aside">
          <div class="container">
            <div class="footer-advanced-layout"><a class="brand" href="index.html"><img src="<?php echo BASE_URL ?>public/img/logo-light-115x34.pngg" alt="" width="115" height="34" srcset="images/logo-light-115x34.png 2x"/></a>
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design by <a href="#">xxxxxxxxxxx</a></p>
            </div>
          </div>
        </div>
      </footer>
</div>
 <!--js del api de google para los logueos-->
         
 <!-- Publicos -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDejDNf71KNs6Pb6FBJZlDF-5LVryQM2Jg&callback=iniciarMap"></script>

<!-- <script src="<?php echo BASE_URL; ?>public/js/jquery.js" type="text/javascript"></script> -->

<script src="<?php echo BASE_URL; ?>public/js/config.js" type="text/javascript"></script>
<script src="<?php echo $_layoutParams['ruta_js']; ?>taps.js" type="text/javascript"></script>
<!-- <script src="<?php echo BASE_URL; ?>public/js/jquery.validationEngine.js" type="text/javascript"></script> -->

<!-- <script src="<?php echo BASE_URL; ?>public/js/jquery-ui.js" type="text/javascript"></script>
 -->
<script src="<?php echo $_layoutParams['ruta_js']; ?>core.min.js"></script>
<script src="<?php echo $_layoutParams['ruta_js']; ?>script.js" type="text/javascript"></script>
<script src="<?php echo $_layoutParams['ruta_js']; ?>modal.js" type="text/javascript"></script>

<script src="<?php echo BASE_URL; ?>public/js/jquery.mask.js"></script>
<script src="<?php echo BASE_URL; ?>public/lightslider/js/lightslider.js"></script>
<script src="<?php echo BASE_URL; ?>public/js/alertify.js"></script>
<script src="<?php echo BASE_URL; ?>public/lightGallery/src/js/lightgallery.js"></script>
<script src="<?php echo BASE_URL; ?>public/lightGallery/lib/jquery.mousewheel.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/lightGallery/modules/lg-fullscreen.min.js"></script>
<script src="<?php echo BASE_URL; ?>public/lightGallery/modules/lg-thumbnail.min.js"></script>



  <!-- Compiled and minified JavaScript -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
<!-- Plugin JavaScript -->
<!-- Custom Theme JavaScript -->
<!--  Js del layout  -->
 
<!--  Js de la vista  -->
<?php if(isset($_layoutParams['js']) && count($_layoutParams['js'])): ?>
    <?php for($i=0; $i < count($_layoutParams['js']); $i++): ?>
        <script src="<?php echo $_layoutParams['js'][$i] ?>" type="text/javascript"></script>
    <?php endfor; ?>
<?php endif; ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="https://apis.google.com/js/api:client.js"></script>

<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>


<!--
modal publicaciones
 -->




</body>

</html>