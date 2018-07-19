  <div class="row center-xs">
    <div class="col-12">
          <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2><span style="color:#E68B53">Clientes</span> que confiaron en nosotros</h2>
                <h4>Nuestros clientes son como nuestros partners</h4>
                <i class="fa fa-2x"></i>
                  <!-- <i class="fa fa-2x fa-angle-down"></i> -->
              </div>
          </div>
    </div>
  </div>


    <section id="content">
      <div class="row white">
        <div class="col-12">
          <ul class="nav-esc">
            <li class="sort active"  data-sort="random" >
                <a href="#noAction" class="animated">Aleatorio</a>
            </li>
            <li class="filter" data-filter="all">
                <a href="#noAction" class="animated">Todos</a>
            </li>
            <?php
            $categories = get_categories([
              'orderby' => 'name',
              'order'   => 'ASC'
            ]);
            foreach ($categories as $cat):
            ?>
            <li class="filter" data-filter="<?php echo $cat->term_id; ?>">
              <a href="#noAction" class="animated"><?php echo $cat->cat_name.' ('.$cat->category_count.')'; ?></a>
            </li>

                <?php
              endforeach;
                  // wp_list_categories( array(
                  //   'orderby'    => 'name',
                  //   'show_count' => true,
                  //   // 'style'    => 'none',
                  //   'style'  => 'list',
                  //   'title_li'=>'<li class="filter"></li>'
                  //   // 'include' => array( 3, 5, 9, 16 )
                  //   // 'exclude'    => array( 10 )
                  // ) );
                ?>
          </ul>
        </div>
      </div>
      <br>

      <div id="portfolio-grid" class="thumbnails row">
        <?php
        $args = array (
// ‘post_type’ => ‘profesionales’,
// ‘post_status’ => ‘publish’,
// ‘order’ => ‘DESC’,
'posts_per_page' => 50,
);
            query_posts($args);

            // $the_query = new WP_Query( $args );
            // echo json_encode(query_posts());
        if(have_posts()): $i=1;
                while(have_posts()): the_post(); //if ($i%2) {
        ?>
        <div class="col-6 col-sm-3 col-xl-2 mix <?php echo $i; ?>"
          data-sort="">
            <div class="ih-item square effect6 colored from_top_and_bottom">
             <a href="<?php the_permalink(); ?>" class="portfolio-link" data-toggle="modal">
              <div class="img">
                      <?php
    //the_author_posts_link()
    //$size=array(NULL,NULL);
    // the_time()  ///muestra la fecha de publicación y en el paréntesis podemos definir el formato de la fecha entre comillas. the_time('j/m/Y')
    // the_date();
    // the excerpt();  //para traer el texto del post, mostraremos el resumen de la entrada; Si no hemos creado un resumen, se mostrará la primera parte de la entrada.
    // the_author_posts_link() estamos mostrando el nombre del autor con un enlace a su página de autor.
    // the_tags()  Si queremos mostrar las etiquetas,
    // the_category()  //y si lo quisiéramos hacer es mostrar la categoría de la entrada, utilizaríamos la función
                            $attr = array(
                                //'src'   => $src,
                                'class' => "img-responsive"
                                //'alt'   => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
                                //'title' => trim( strip_tags( $attachment->post_title ) )
                              );

                        if (has_post_thumbnail()){ the_post_thumbnail('medium',$attr); }
                      ?>
              </div>
              <div class="info">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <span class="btn-naranja">Ver más</span>
              </div>
            </a>
            </div>
        </div>
      <?php $i++; endwhile; else:  //if($i%4==0){ //the_content('Leer más...'); <a href=" " >Leer más</a></p> ?>
      <p><?php _e('¡Lo siento :( ! No se encontro ningun post','cloudbits.org.mx') ?></p>

      <?php endif; ?>


      </div>
    </section>



    <div class="navi">
      <div class="right" style="color:black; font-size:2rem;">
          <?php
          // if( get_previous_posts_link() ) :   ///NO FUNCIONAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
          //     previous_post_link( '« Post Anteriores' );
          //     endif;
          //     next_post_link('Post Siguiente >>');

          ?>
      </div><!-- Fin right -->
    </div>
<?php
  // echo do_shortcode('[nimble-portfolio]');
?>



    <!-- From left and right around-xs -->
<!-- <div class="row  between-xs">
<div class="col-sm-6">
  <div class="ih-item circle colored effect13 from_left_and_right"><a href="#">
      <div class="img"><img src="images/assets/1.jpg" alt="img"></div>
      <div class="info">
        <div class="info-back">
          <h3>Heading here</h3>
          <p>Description goes here</p>
        </div>
      </div></a></div>
</div>
</div> -->
<!-- end From left and right -->
