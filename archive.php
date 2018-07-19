<?php get_header(); ?>
    <!-- Section: intro -->
    <section id="intro" class="intro">     
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <center><div class="logo">&nbsp;</div><br></center>
          <div id="nt-title-container">
           <ul id="nt-title">                     
            <li> Desarrollo Web</li>
            <li> Creación de Apps </li>
            <!-- <li> Estrategía de Redes Sociales</li>
            <li> SEO</li>
            <li> Mailing</li>
            <li> E-commerce</li>           
            <li> Adwords</li>
            <li> Inbound mkt</li>-->
            <li> Aplicaciones Web</li>
            <li> Diseño Gráfico</li>
            <li> Web Hosting</li>
           </ul>
          </div>
        </div>
        <div class="col-lg-12">
         <div class="page-scroll">
            <a href="#hacemos" class="btn btn-circle"><i class="fa fa-angle-double-down animated"></i></a>
         </div> 
        </div>
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg"><br><br></div>
      </div>
    </div>
    </section>
    <!-- /Section: intro -->
    <!-- Section: services -->
    <section id="hacemos" class="banner" data-stellar-background-ratio="0.3">
     <div class="container">       
      <div class="row">
       <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
       <!--<small>Soluciones Tecnológicas para tu Negocio</small>-->
         <div class="pasion"></div>
       </div>
       <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <h2 class="center">Nuestra Pasión</h2>
         <ul>
           <li>Branding Online</li>
           <li>Estrategia de Comunicación Digital</li>
           <li>Portal de Internet Institucional</li>
           <li>Ecosistema de Redes Sociales</li>
           <li>Estrategia y Ejecución de Pautas en Medios Digitales</li>
         </ul>
       </div>
       <!--
         <div class="col-xs-12"><br>
         <br>
         <br></div>
         <div class="col-lg-12">
         <div class="page-scroll">
            <a href="#service" class="btn btn-circle2"><i class="fa fa-angle-double-down fa-3x animated"></i></a>
         </div> 
       </div>
       -->
       </div>
     </div>
    </section>
    <!-- hacemos -->
    <!-- Section: services -->
    <section id="service" class="photo services" data-stellar-background-ratio="0.3">
        <?php include(TEMPLATEPATH.'/servicios.php'); ?>
    </section>
    <!-- /Section: services -->
    <!-- Section: exito -->
    <section id="casos" style="background-position: 0% 165px;" class="photo customers" data-stellar-background-ratio="0.6">
 		<?php include(TEMPLATEPATH.'/proyectos.php'); ?>
	</section>
    <!-- /Section: exito -->
    <section id="contacts" class="photo banner" >    
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                      <h2>¿Quiénes Somos?</h2>
                      <p>Somos un equipo interdisciplinario que aporta ideas innovadoras que nos permite que la calidad de nuestros desarrollos forme parte clave del éxito de nuestros clientes.</p>
                      <p>Nuestra metodología de trabajo garantiza a nuestros clientes una solución personalizada adecuada a sus posibilidades.<br></p>
                    </div>
                </div>
                <div class="hidden-xs col-sm-12 col-md-6 col-lg-6">
              <div id="sorprise" class="sorprise">                
                <div class="element">
                    <img src="<?php echo IMAGES; ?>/logos/02.png" class="back" alt="cloudbits.org.mx" />
                </div>
                <div class="element">
                   <img src="<?php echo IMAGES; ?>/logos/01.png" class="back" alt="cloudbits.org.mx"/>
                </div>
                    <img id="title-line1" src="<?php echo IMAGES; ?>/logos/03.png" alt="jquery" width="55" height="55" style=" top:200px; left:179px;"/>
                    <img id="title-line2" src="<?php echo IMAGES; ?>/logos/05.png" alt="android" style="width:67px; height:67px; top:160px; left:233px;"/>
                    <img id="title-line3" src="<?php echo IMAGES; ?>/logos/04.png" alt="programación en Angular" width="59" height="59" style=" top:160px; left:113px;"/>
                    <img id="title-line4" src="<?php echo IMAGES; ?>/logos/07.png" alt="programación en php" class="logos" style=" top:115px; left:173px;"/>
                    <img id="title-line5" src="<?php echo IMAGES; ?>/logos/08.png" alt="Wordpress" width="69" height="69" style=" top:97px; left:70px;"/>
                    <img id="title-line6" src="<?php echo IMAGES; ?>/logos/06.png" alt="Ecommerce" width="68" height="68" style=" top:97px; left:272px;"/>
                    <img id="title-line7" src="<?php echo IMAGES; ?>/logos/09.png" alt="css3"  style="top:45px; left:130px;"/>
                    <img id="title-line8" src="<?php echo IMAGES; ?>/logos/10.png" alt="html5" style="top:40px; left:210px;" />
                 <div class="element">
                    <img src="<?php echo IMAGES; ?>/logos/11.png" class="back" alt="cloudbits.org.mx" />
                </div>                
              </div>
            </div>
           </div>
        </div>
    </section>
    <!-- Section: contact -->
    <section id="contact" style="background-position: 0% 365px;" class="photo contacts" data-stellar-background-ratio="0.2">
        <div class="heading-contact">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Contáctanos</h2>
                    <i class="fa fa-2x fa-angle-down"></i>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
          <div id="contacto">            
            <form id="commentForm" method="GET" action="">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="* Nombre completo" required="required" />
                        </div>
                        <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="* Email" required="required" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="* Comentario"></textarea>
                        </div>
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar Mensaje</button>
            </form>
          </div>
        </div>                   
            <!--   
             <p class="text-justify">Somos un equipo interdisciplinario que aporta ideas innovadoras que nos permite que la calidad de nuestros desarrollos forme parte clave del éxito de nuestros clientes. Ofrecemos cualquier solución de Internet, desde páginas sencillas hasta desarrollos integrales. Nuestra metodología de trabajo garantiza a nuestros clientes una solución personalizada adecuada a sus posibilidades.</p>            
             <p class="text-left">
                <i class="fa fa-globe"></i> cloudbits.org.mx  <br>
                <abbr title="Phone"><i class="fa fa-whatsapp"></i></abbr> (044) 2224.02.54.08<br>  
                <i class="fa fa-envelope-o"></i> <a href="mailto:escarreon@cloudbits.org.mx">ventas@cloudbits.org.mx</a>
            </p>  
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="L3H5QW9MXPFGL">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
</form>         
-->            
        </div>
        </div>
    </section>   
<?php //get_sidebar()?>
<?php get_footer(); ?>