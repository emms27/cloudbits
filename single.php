<?php get_header(); ?>
<div class="container-fluid">
  <header id="intro">
    <?php include(TEMPLATEPATH.'/portada.php'); ?>
  </header>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 <section id="casos" style="background-position: 0% 165px;" class="photo" data-stellar-background-ratio="0.6">
   <div class="row" id="bienvenida">
     <div class="col-xs-12">
       <div class="wow bounceInDown" data-wow-delay="0.4s">
           <div class="section-heading">
               <h2><?php the_title(); ?></h2>
               <i class="fa fa-2x fa-angle-down"></i>
           </div>
       </div>
     </div>
     <div class="empty"> </div>
     <!-- <br><br><br> -->
     <div class="col-xs-12 col-md-6">
           <div class="wow bounceInUp" data-wow-delay="0.2s">
             <a href="#" class="default link" target="_blank">
               <span class="image-bg">
                 <?php
                       // para obtener el valor de la primera imagen
                     $em_mtbx_img1 = get_post_meta( $post->ID, '_em_mtbx_img1', true );
                     if($em_mtbx_img1 != '') { // Si existe el valor
                     ?>
                   <span class="image-shop-scroll" style="background-image: url('<?php echo $em_mtbx_img1; ?>');"></span>
                   <!--  <img src="<?php //echo $em_mtbx_img1; ?>" alt="" /> -->
               <?php } ?>
               <span class="glare"></span>
             </span>
            </a><!-- <span class="margin btn">VIEW DEMO</span> -->
         </div>
     </div>
     <div class="col-xs-12 col-md-6">
       <div class="row middle-xs center-xs">
         <div class="col-xs-12 col-md-4 end-md">
            <?php the_post_thumbnail( array(100, 100)); ?><br>
         </div>
         <div class="col-xs-12 col-md-8 start-md">
           <small> Publicado por <?php the_author_posts_link() ?>  <br>
            El <?php the_time('j/m/Y') ?>. <br>
            Categoría: <?php the_category(', '); ?> </small><br>
         </div>
       </div>
       <div class="row start-md">
         <div class="col-xs-12 ContentCasos">
            <div class="post"><?php the_content(); ?></div>
         </div>

       </div>
     </div>
   </div>

   <div class="navi">
     <div class="right" style="color:black; font-size:2rem;">
         <?php //if( get_previous_posts_link() ) :   ///NO FUNCIONAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
            //  previous_posts_link( '« Post Anteriores' );
             //endif;
            //  next_posts_link('Post Siguiente >>');

         ?>
     </div><!-- Fin right -->
   </div>

 <?php endwhile; endif; ?>
 </section>
</div>
<?php include(TEMPLATEPATH.'/indexJs.php');
  // include(TEMPLATEPATH.'/singleJs.php');
  ?>
<?php get_footer(); ?>
