(function ($) {

  var items = document.querySelectorAll(".timeline li");


  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
        // alert(isElementInViewport(items[i]));
      }else{
          items[i].classList.remove("in-view");
      }
    }
  }


  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);

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
                duration: 2000,
                pauseOnHover: 0,
    });


    $('#portfolio-grid').mixitup({
      elementSort: 'sort'
      // controls: {
      //   live: true
      // }
      // animation: {
      //   effects: 'rotateY(-25deg)',
      //   perspectiveDistance: '2000px'
      // },
      // classNames: {
      //   block: 'portfolio-grid',
      // //  elementSort: 'sort',
      //   elementSort: 'multimix'
      //   // elementMultimix: 'multimix'
      // }
        // selectors: {
        //   filter: '.filter-1',
        //   sort: '.sort-1'
        // }
        // 'onMixStart': function (config) {
        //     $('div.toggleDiv').hide();
        // }
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
if (width>768){
    // header#intro, header#intro .altoHeader

particlesJS('particles-js',{
    "particles": {
      "number": {
        "value": 80,
        "density": {
          "enable": true,
          "value_area": 800
        }
      },
      "color": {
        "value": "#ffffff"
      },
      "shape": {
        "type": "circle",
        "stroke": {
          "width": 0,
          "color": "#000000"
        },
        "polygon": {
          "nb_sides": 5
        },
        "image": {
          "src": "img/github.svg",
          "width": 100,
          "height": 100
        }
      },
      "opacity": {
        "value": 0.7,
        "random": false,
        "anim": {
          "enable": false,
          "speed": 1,
          "opacity_min": 0.1,
          "sync": false
        }
      },
      "size": {
        "value": 5,
        "random": true,
        "anim": {
          "enable": false, //efecto en las puntas
          "speed": 40,
          "size_min": 0.1,
          "sync": false
        }
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 1,
        "condensed_mode": {
                enable: false,
                rotateX: 600,
                rotateY: 600
        }
      },
      "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "attract": {
          "enable": false,
          "rotateX": 600,
          "rotateY": 1200
        }
      }
    },
    "interactivity": {
      "detect_on": "canvas", // "canvas" or "window"
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        },
        "onclick": {
          "enable": true,
          "mode": "push", // "push" or "remove" (particles)
          "nb": 4
        },
        "resize": true
      },
      "modes": {
        "grab": {
          "distance": 400,
          "line_linked": {
            "opacity": .5
          }
        },
        "bubble": {
          "distance": 400,
          "size": 40,
          "duration": 2,
          "opacity": 8,
          "speed": 3
        },
        "repulse": {
          "distance": 200
        },
        "push": {
          "particles_nb": 4
        },
        "remove": {
          "particles_nb": 2
        }
      }
    },
    "retina_detect": true,
    "config_demo": {
      "hide_card": false,
      "background_color": "#b61924",
      "background_image": "",
      "background_position": "50% 50%",
      "background_repeat": "no-repeat",
      "background_size": "cover"
    }
  }
);
// $.stellar({
//   horizontalOffset: 40,
//   verticalOffset: 150
// });

    var wancho = $(window).width();
		var ancho = $("#sorprise").width();
		var tancho = $("#title-line7").width();
		// alert(wancho + 'sorprise' + ancho + 'element' + tancho);
	    var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title-line1', TweenMax.from( $('#title-line1'), .70, {css:{right:'80px',top:'220px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line2', TweenMax.from( $('#title-line2'), .70, {css:{right:'30px',top:'190px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line3', TweenMax.from( $('#title-line3'), .70, {css:{left:'120px',top:'195px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line4', TweenMax.from( $('#title-line4'), .70, {css:{right:'0px',top:'230px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line5', TweenMax.from( $('#title-line5'), .70, {css:{left:'120px',top:'200px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line6', TweenMax.from( $('#title-line6'), .70, {css:{left:'190px',top:'200px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line7', TweenMax.from( $('#title-line7'), .70, {css:{left:'140px',top:'220px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line8', TweenMax.from( $('#title-line8'), .70, {css:{right:'50px',top:'230px'}, ease:Quad.easeInOut}));
}

// }else{
// 	$.stellar({
//   		horizontalOffset: 20,
//   		verticalOffset: 100
// 	});
// }
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
    //  alert(wScroll);


    if(wScroll > $('.accedo').offset().top - $(window).height()){
             var offset = Math.min(0, wScroll - $('.accedo').offset().top +$(window).height() - 513);
             $('.esc-1').css({'transform': 'translate('+ offset +'px, '+ Math.abs(offset * 0.05) +'px)'});
             $('.esc-2').css({'transform': 'translate('+ Math.abs(offset) +'px, '+ Math.abs(offset * 0.05) +'px)'});
    }

    if(wScroll-200 > $('.timesc').offset().top - $(window).height()){
       $(".timesc").addClass("in-view");
    }else if(wScroll < $('.timesc').offset().top - $(window).height()){
      $(".timesc").removeClass("in-view");
    }
    //
    // if(wScroll-200 > $('.timesc2').offset().top - $(window).height()){
    //    $(".timesc2").addClass("in-view");
    // }else if(wScroll < $('.timesc2').offset().top - $(window).height()){
    //   $(".timesc2").removeClass("in-view");
    // }


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
    $('.menu-item a').bind('click', function(event) {
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
    // Validar Formulario Login
    $('#commentForm').validate({
            rules: {
                name: {required: true,},
        		email: {required: true,email: true,},
                message: {required: true,},
            },
            messages: {
                name: {required: "<div style='font-size:12px;color:red;'>Campo obligatorio</div>",},
        		email: {
              		required: "<div style='font-size:12px;color:red'>Campo obligatorio</div>",
              		email: "<div style='font-size:12px;color:red'>Tu email no tiene el formato correcto: name@domain.com</div>"
            	},
            	message: {required: "<div style='font-size:12px;color:red'>Campo obligatorio</div>",},
            },
    });
})(jQuery);
