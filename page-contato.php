<?php include("header.php") ?>

      <section class="mo-content" id="page-header">
         <div class="row">
            <div class="large-12 columns page-title mo-animate" data-animate="fadeInDown">
               <div class="heading-wrapper">
                  <span class="heading-line"></span>
               </div>
               <h3>Fale Conosco</h3>
               <ol class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="active">Contato</li>
               </ol>
            </div>
         </div>
      </section>

      <section class="mo-content">
         <div class="row">
            <div class="large-6 medium-6 medium-potrait-12 small-12 columns" id="contact-content">
               <span class="heading-line mo-animate" data-animate="bounceIn"></span>
               <h3 class="heading-contact mo-animate" data-animate="fadeInDown">Fale Conosco</h3>

               <p class="mo-animate" data-animate="fadeInDown">
                  Fique a vontade para nos enviar uma mensagem a qualquer momento e retornaremos assim que possível.

               </p>

               <?php echo do_shortcode('[contact-form-7 id="12" title="Formulário de contato"]'); ?>

            </div>

            <div class="large-5 large-push-1 medium-5 medium-push-1 medium-potrait-push-0 medium-potrait-12 small-12 columns">
               <div class="panel fold nit mo-animate" data-animate="fadeInRight" id="panel-contact">
                  <h4 class="inline-heading-line"><span>Atendimento</span></h4>
                  <p>Será um prazer atendê-lo.</p>
                  <div class="feature-left">
                     <div class="no-shape white small">
                        <i class="icon-time"></i>
                     </div>
                     <h6>Horário de atendimento</h6>
                     <p>
                        Segunda a Sexta / 9:00 - 18:00 <br>
                     </p>
                  </div>

                  <div class="feature-left">
                     <div class="no-shape white small">
                        <i class="icon-map"></i>
                     </div>
                     <h6>Endereço</h6>
                     <p>Niterói - RJ<br>
                     Atendemos todo Brasil</p>
                  </div>

                  <div class="feature-left">
                     <div class="no-shape white small">
                        <i class="icon-phonebook"></i>
                     </div>
                     <h6>Contatos</h6>
                     <p>
                        Tel: (21) 3615 7652 <br>
                        Email: contato@nitdesign.com.br
                     </p>
                  </div>
               </div>
            </div>

         </div>
      </section>

<?php include("footer.php") ?>