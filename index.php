<?php get_header(); ?>
<div class="container-fluid">
   <header id="intro">
     <?php include(TEMPLATEPATH.'/portada.php'); ?>
   </header>
  <?php $dias = array("Domingo","Lunes","Martes","Mi&eacute;rcoles","Jueves","Viernes","S&aacute;bado"); ?>
  <section id="bienvenida">
    <?php include(TEMPLATEPATH.'/welcome.php'); ?>
  </section>

  <section id="seobussiness">
    <?php include(TEMPLATEPATH.'/mkt_negocio.php'); ?>
  </section>

  <section id="pasion" class="_fb">
    <?php include(TEMPLATEPATH.'/banner_competencia.php'); ?>
  </section>

  <section id="seo">
    <?php include(TEMPLATEPATH.'/seo.php'); ?>
  </section>

  <section id="service">
    <?php include(TEMPLATEPATH.'/servicios.php'); ?>
  </section>

  <section id="proyectos">
        <?php include(TEMPLATEPATH.'/proyectos.php'); ?>
  </section>
  <section id="contact" class="_fb">
    <?php include(TEMPLATEPATH.'/contacto.php'); ?>
  </section>
</div>
<?php include(TEMPLATEPATH.'/indexJs.php'); ?>
<?php get_footer(); ?>
