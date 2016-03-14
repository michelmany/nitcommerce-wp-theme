<footer>
         <div class="mo-contentfull content-bg" id="footer-bg">
            <div class="rowfull">
               <div class="left-bg"></div>
               <div class="right-bg"></div>
            </div>
         </div>

         <section class="mo-content social-bg-content">
            <div class="row">
               <div class="large-3 medium-3 columns get-connect medium-potrait-hide small-hide">
                  <h6>CONECTE-SE!</h6>
               </div>

               <div class="large-9 medium-9 columns medium-potrait-12 social-content">
                  <ul class="social-icon cube">
                     <li>
                        <div class="front"><a class="social-facebook" href="http://facebook.com/nitcommerce" target="_blank"></a></div>
                        <div class="back"><a class="social-facebook" href="http://facebook.com/nitcommerce" target="_blank"></a></div>
                     </li>
                     <li>
                        <div class="front"><a class="social-twitter" href="#"></a></div>
                        <div class="back"><a class="social-twitter" href="#"></a></div>
                     </li>
                     <li>
                        <div class="front"><a class="social-google" href="#"></a></div>
                        <div class="back"><a class="social-google" href="#"></a></div>
                     </li>

                     <li>
                        <div class="front"><a class="social-vimeo" href="#"></a></div>
                        <div class="back"><a class="social-vimeo" href="#"></a></div>
                     </li>

                     <li>
                        <div class="front"><a class="social-instagram" href="#"></a></div>
                        <div class="back"><a class="social-instagram" href="#"></a></div>
                     </li>
                     <li>
                        <div class="front"><a class="social-skype" href="#"></a></div>
                        <div class="back"><a class="social-skype" href="#"></a></div>
                     </li>
                  </ul>
               </div>
            </div>
         </section>

         <section class="mo-content footer-content">
            <div class="row">
               <div class="large-3 medium-3 medium-potrait-12 columns">
                  <div class="footer-logo">
                     <a href="<?php bloginfo('home');?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-footer.png" alt="Maleo Logo" class="retina">
                     </a>
                     <span class="logo-text"><small>&copy; <?php echo date('Y');?> Todos os direitos reservados.</small></span>
                  </div>
               </div>

               <div class="large-3 medium-3 medium-potrait-4 columns">
                  <h6 class="heading-footer">Fale Conosco</h6>
                  <ul>
                     <li>Contato Geral: </li>
                     <li><a class="maleo-color" href="#">contato@nitdesign.com.br</a></li>
                     <li>Site da Empresa:</li>
                     <li><a class="maleo-color" href="#">www.nitdesign.com.br</a></li>
                  </ul>
               </div>

               <div class="large-3 medium-3 medium-potrait-4 columns">
                  <h6 class="heading-footer">Links Rápidos</h6>
                  <ul>
                     <li><a href="<?php bloginfo('home')?>/conheca">Conheça o Sistema</a></li>
                     <li><a href="#">Extensões</a></li>
                     <li><a href="<?php bloginfo('home')?>/planos">Nossos Planos</a></li>
                     <li><a href="#">Perguntas Frequentes</a></li>
                     <li><a href="<?php bloginfo('home')?>/cases">Cases de Sucesso</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="<?php bloginfo('home')?>/contato">Contato</a></li>

                  </ul>
               </div>

               <div class="large-3 medium-3 medium-potrait-4 columns">
                  <h6 class="heading-footer">Contatos</h6>

                  <address>
                     <i class="icon-phoneold"></i>  (21) 3615-7652 <br>
                  </address>


                  <ul>
                     <li>Niterói - RJ</li>
                     <li>Atendemos todo território nacional.</li>
                  </ul>


               </div>

               <div class="scroll-top">
                  <a id="top" class="scroll"><i class="icon-chevron-up"></i></a>
               </div>
            </div>
         </section>
      </footer>

   </div>




   <!-- javascript here -->
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.validate.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.queryloader2.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.smartmenus/jquery.smartmenus.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox-media.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.waypoints.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.retina.js"></script>

   <!-- javascript plugin -->
   <script src="<?php bloginfo('template_url'); ?>/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.easyResponsiveTabs.js"></script>
   <script src="<?php bloginfo('template_url'); ?>/js/jquery.isotope.js"></script>

   <!-- javascript core -->
   <script src="<?php bloginfo('template_url'); ?>/js/maleo.js"></script>

   <script type="text/javascript">
      jQuery(document).ready(function($){
         $('.banner').revolution({
            delay:8000,
            startwidth:1190,
            startheight:510,
            hideThumbs:1,
            navigationType:"none",                  // bullet, thumb, none
            navigationArrows:"solo",                // nexttobullets, solo (old name verticalcentered), none
            navigationStyle:"navbar",               // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
            navigationHAlign:"center",              // Vertical Align top,center,bottom
            navigationVAlign:"bottom",              // Horizontal Align left,center,right
            navigationHOffset:0,
            navigationVOffset:0,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:55,
            // soloArrowLeftVOffset:-10,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:55,
            // soloArrowRightVOffset:-10,
            touchenabled:"on",                      // Enable Swipe Function : on/off
            onHoverStop:"off",                      // Stop Banner Timet at Hover on Slide on/off
            stopAtSlide:-1,                         // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
            stopAfterLoops:-1,                      // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
            hideCaptionAtLimit:0,                   // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
            hideAllCaptionAtLilmit:0,               // Hide all The Captions if Width of Browser is less then this value
            hideSliderAtLimit:0,                    // Hide the whole slider, and stop also functions if Width of Browser is less than this value
            shadow:0,                               //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
            fullWidth:"on"                          // Turns On or Off the Fullwidth Image Centering in FullWidth Modus
         });
      });
   </script>
</body>
</html>
