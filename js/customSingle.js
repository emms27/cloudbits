(function ($) {

  // jQuery(document).ready(function(){
  var $listMenu = $('.menu ul li');
  $('.click').click(function(){
        $('#burger').toggleClass('active');
        $('.wrapper').toggleClass('menu_open');
          if ($('#burger').hasClass('active')) {
         $listMenu.show();
                setTimeout(function(){
                    $listMenu.css('opacity','1');
                    $listMenu.css('transform','translateY(0px)');
                }, 200);
            } else {
            $listMenu.css('opacity','0');
                  $listMenu.css('transform','translateY(-40px)');
            setTimeout(function(){
            $listMenu.hide();
          }, 500);
            }
          return false;
  });
  // });

  var nt_title = $('#nt-title').newsTicker({
              row_height: 40,
              max_rows: 1,
              duration: 3000,
              pauseOnHover: 0
  });








	/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */
/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/
/* Otherwise just put the config content (json): */
width = $(document).width();
function initScrollAnimations() {}
	new WOW().init();
	jQuery(window).load(function() {
		jQuery("#preloader").delay(100).fadeOut("slow");
		jQuery("#load").delay(100).fadeOut("slow");
	});
	//jQuery to collapse the navbar on scroll
	$(window).scroll(function() {
    var wScroll = $(this).scrollTop();
    //alert(wScroll); service
    //$('.logo').css({
    //  'transform' : 'translate(0px, '+ wScroll /4 +'%)'
    //});
     //alert(wScroll);


		if (wScroll > 700) {
      $(".cdbit").removeClass("hiddenESC");
      $(".cdbit").addClass("visibilityESC");
      $(".cdbit").addClass("navbar");
      $(".cdbit").addClass("navbar-custom");
      $(".cdbit").addClass("navbar-fixed-top");
      // $(".cdbit").addClass("top-nav-collapse");
		} else if (wScroll < 500) {
      $(".cdbit").removeClass("visibilityESC");
      $(".cdbit").addClass("hiddenESC");
      $(".cdbit").removeClass("navbar");
      $(".cdbit").removeClass("navbar-custom");
      $(".cdbit").removeClass("navbar-fixed-top");
			$(".cdbit").removeClass("top-nav-collapse");
		}


	});
	//OWL
	// function random(owlSelector){
	//     owlSelector.children().sort(function(){
	//         return Math.round(Math.random()) - 0.5;
	//     }).each(function(){
	//       $(this).appendTo(owlSelector);
	//     });
	//   }
	//   var owls = $("#owl-example");
	//   owls.owlCarousel({
	//    items : 1,
	//    autoPlay: 6000,
	//    navigation: false,
	//    beforeInit : function(elem){random(elem);}
  //   });
	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
		$('a.navESC').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});
	   $.validator.setDefaults({
        submitHandler: function(){
            var formdata = $('#commentForm').serialize();
            $.ajax({
                      type: "POST",
                      url: "correo.php",
                      data: formdata,
                      success: function(){
                        $('#contacto').html('<div id="send" style="color:#FFF; font-family:Verdana; font-size:13px; background-color:#069;">Gracias por contactarnos en breve nos comunicaremos con usted.<br /><br /></div>').hide('').fadeIn(1500, function(){$('#mensaje').append('')});
                        }
            })
            return false;
        }
    });

})(jQuery);
