<?php include('header.php'); ?>

      <section class="mo-content" id="page-header">
         <div class="row">
            <div class="large-12 columns page-title mo-animate" data-animate="fadeInDown">
               <div class="heading-wrapper">
                  <span class="heading-line"></span>
               </div>
               <h3>Cases de sucesso</h3>
               <ol class="breadcrumb">
                  <li><a href="<?php bloginfo('home')?>">Home</a></li>
                  <li class="active">Cases de sucesso</li>
               </ol>
            </div>
         </div>
      </section>

      <section class="mo-content">
         <div class="row">
            <div class="large-12 columns">
               <div id="portfolio-filter" class="gap" data-bottom="70">
                  <ul>
                     <li><a class="button button-border mo-animate radius selected" data-filter="*" data-animate="bounceIn">Todos</a></li>
                     <li><a class="button button-border mo-animate radius" data-filter=".bronze" data-animate="bounceIn" data-delay="50">Bronze</a></li>
                     <li><a class="button button-border mo-animate radius" data-filter=".prata" data-animate="bounceIn" data-delay="150">Prata</a></li>
                     <li><a class="button button-border mo-animate radius" data-filter=".ouro" data-animate="bounceIn" data-delay="350">Ouro</a></li>
                     <li><a class="button button-border mo-animate radius" data-filter=".safira" data-animate="bounceIn" data-delay="600">Safira</a></li>
                     <li><a class="button button-border mo-animate radius" data-filter=".diamante" data-animate="bounceIn" data-delay="900">Diamante</a></li>
                  </ul>
               </div>

               <ul class="portfolio-container large-block-grid-3 medium-block-grid-3 small-block-grid-1 no-gutter">

                  <li class="prata">
                     <div class="mo-caption move">
                        <img src="<?php bloginfo('template_url')?>/img/sample/maxime_creperie_01.jpg" alt="">
                        <div class="mask"></div>
                        <div class="content">
                           <a href="<?php bloginfo('template_url')?>/img/sample/maxime_creperie_01.jpg" class="preview green fancybox" data-fancybox-group="gallery" title="Maxime Creperie">
                              <i class="icon-search"></i>
                           </a>
                           <a href="http://www.maximecreperie.com.br" target="_blank" class="permalink white"><i class="icon-link"></i></a>
                        </div>
                     </div>
                  </li>

                  <li class="ouro">
                     <div class="mo-caption move">
                        <img src="<?php bloginfo('template_url')?>/img/sample/carolribeiro_01.jpg" alt="">
                        <div class="mask"></div>
                        <div class="content">
                           <a href="<?php bloginfo('template_url')?>/img/sample/carolribeiro_01.jpg" class="preview green fancybox" data-fancybox-group="gallery" title="Carol Ribeiro Acessórios">
                              <i class="icon-search"></i>
                           </a>
                           <a href="http://www.carolribeiroacessorios.com.br" target="_blank" class="permalink white"><i class="icon-link"></i></a>
                        </div>
                     </div>
                  </li>

                  <li class="diamante">
                     <div class="mo-caption move">
                        <img src="<?php bloginfo('template_url')?>/img/sample/benihana_01.jpg" alt="">
                        <div class="mask"></div>
                        <div class="content">
                           <a href="<?php bloginfo('template_url')?>/img/sample/benihana_01.jpg" class="preview green fancybox" data-fancybox-group="gallery" title="Benihana Perfumes & Cosméticos">
                              <i class="icon-search"></i>
                           </a>
                           <a href="http://www.benihana.com.br" target="_blank" class="permalink white"><i class="icon-link"></i></a>
                        </div>
                     </div>
                  </li>

               </ul>

            </div>
         </div>
      </section>

      <section class="mo-content" id="process-chart">
         <div class="row">
            <div class="large-12 columns mo-animate" data-animate="bounceIn">
               <h3>Não perca mais tempo, comece a vender pela internet!</h3>

               <a class="button white small-potrait-hide radius" href="page-planos.php">Escolha agora o melhor Plano para você <i class="icon-chevron-right"></i></a>
            </div>
         </div>
      </section>

<?php include('footer.php'); ?>
