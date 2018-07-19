<style media="screen">
  .widget{
      list-style: none;
  }
</style>
<section id="sidebar">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : endif; ?>
</section>
