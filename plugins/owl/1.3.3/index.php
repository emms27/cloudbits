<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>COPEI   Colegio de Profesionales en la Enseñanza del Inglés, A.C.</title>
    <link rel="shortcut icon" type="image/x-icon" href="files/img/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    
    <script src="files/js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="../files/nivo/js/jquery-1.9.0.min.js"></script>
  </head>
  <body>



<link rel="stylesheet" href="../files/owl/css/owl.carousel.css">
<link rel="stylesheet" href="../files/owl/css/owl.theme.css">
<script src="../files/owl/js/owl.carousel.js"></script>

<div id="owl-example" class="owl-carousel">
  <div><img src="../files/img/Businessman-works-on-lapt-007.jpg" width="200px" height="200px"></div>
  <div><img src="../files/img/4751.jpg" width="200px" height="200px"></div>
  <div><img src="../files/img/atencion-cliente.jpg" width="200px" height="200px"></div>
  <div><img src="../files/img/younger-business-woman.jpg" width="200px" height="200px"></div>
  <div><img src="../files/img/business_man.jpg" width="200px" height="200px"></div>
</div>


    <script type="text/javascript">

$(document).ready(function() {
  function random(owlSelector){
    owlSelector.children().sort(function(){
        return Math.round(Math.random()) - 0.5;
    }).each(function(){
      $(this).appendTo(owlSelector);
    });
  }

  var owl = $("#owl-example");
  owl.owlCarousel({
   items : 3,
   autoPlay: 3000,
   navigation: false,
   beforeInit : function(elem){random(elem);}  //Parameter elem pointing to $("#owl-demo")
  });

});

    </script>
    
  </body>
</html>
