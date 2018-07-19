<?php get_header(); ?>
<div class="container-fluid">
  <header id="intro">
    <?php include(TEMPLATEPATH.'/portada.php'); ?>
  </header>

  <style media="screen">
  ul, .ContentCasos{
    text-align: left;
  }


  form.wpcf7-form label, section#contact h2 {
      color: #0065a4;
  }

  .wpcf7-form-control-wrap {
      color:#737272;
  }

  textarea.wpcf7-form-control, input.wpcf7-form-control {
    width: 100%;

  }

  input.wpcf7-submit {
    color: #0065a4;
    width: 60%;
    border: 1px solid #0065a4;
}

  span.wpcf7-not-valid-tip, div.wpcf7-response-output {
      color: #f05352;
  }



  .wpcf7-recaptcha{
    text-align: center;
  }

  .wpcf7-validation-errors {
      border: 2px solid #f7e700;
      color: #f05352;
  }

  </style>
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<section id="casos" style="background-position: 0% 165px;" class="photo" data-stellar-background-ratio="0.6">
  <div class="row">
    <div class="col-xs-12 col-md-8">
      <div class="wow bounceInDown" data-wow-delay="0.4s">
          <div class="section-heading">
              <?php
                the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);
              ?>
              <br>
              <h2><?php the_title(); ?></h2>
          </div>
          <div class="col-xs-12 ContentCasos">
            <div class="post"><?php the_content(); ?></div>
          </div>
        </div>
      </div>
    <div class="col-xs-12 col-md-4">
      <?php    get_sidebar('sidebar');     ?>
    </div>

  </div>
</section>
<?php endwhile; endif; ?>
</div>
<div class="accedo timesc timesc2"></div>
<?php include(TEMPLATEPATH.'/indexJs.php'); ?>
<?php get_footer(); ?>
