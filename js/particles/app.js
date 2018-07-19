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

$(document).ready(function() {
      var controller = $.superscrollorama();
      // individual element tween examples
      controller.addTween('#title-line1', TweenMax.from( $('#title-line1'), .70, {css:{right:'80px',top:'50px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line2', TweenMax.from( $('#title-line2'), .70, {css:{right:'80px',top:'90px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line3', TweenMax.from( $('#title-line3'), .70, {css:{left:'50px',top:'95px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line4', TweenMax.from( $('#title-line4'), .70, {css:{right:'0px',top:'135px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line5', TweenMax.from( $('#title-line5'), .70, {css:{left:'90px',top:'175px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line6', TweenMax.from( $('#title-line6'), .70, {css:{right:'100px',top:'185px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line7', TweenMax.from( $('#title-line7'), .70, {css:{left:'30px',top:'220px'}, ease:Quad.easeInOut}));
      controller.addTween('#title-line8', TweenMax.from( $('#title-line8'), .70, {css:{right:'30px',top:'250px'}, ease:Quad.easeInOut})); 
      $('body').css('visibility','visible');
      // TimelineLite for title animation, then start up superscrollorama when complete
      (new TimelineLite({onComplete:initScrollAnimations}))
        .from( $('#title-line1 span'), .4, {delay: 1, css:{right:'1000px'}, ease:Back.easeOut})
        .from( $('#title-line2'), .4, {css:{top:'1000px',opacity:'0'}, ease:Expo.easeOut})
        .append([
          TweenMax.from( $('#title-line3 .char1'), .25+Math.random(), {css:{top: '-200px', right:'1000px'}, ease:Elastic.easeOut}),
          TweenMax.from( $('#title-line3 .char2'), .25+Math.random(), {css:{top: '300px', right:'1000px'}, ease:Elastic.easeOut}),
          TweenMax.from( $('#title-line3 .char3'), .25+Math.random(), {css:{top: '-400px', right:'1000px'}, ease:Elastic.easeOut}),
          TweenMax.from( $('#title-line3 .char4'), .25+Math.random(), {css:{top: '-200px', left:'1000px'}, ease:Elastic.easeOut}),
          TweenMax.from( $('#title-line3 .char5'), .25+Math.random(), {css:{top: '200px', left:'1000px'}, ease:Elastic.easeOut})
        ])
        .to( $('#title-info'), .5, {css:{opacity:.99, 'margin-top':0}, delay:-1, ease:Quad.easeOut});
      function initScrollAnimations() {
        $('#content-wrapper').css('display','block');
        var controller = $.superscrollorama();
        // showcase tweens
        controller.addTween('#clientes h2', TweenMax.from( $('#clientes h2'), .75, {css:{letterSpacing:20,opacity:0}, ease:Quad.easeOut}));
        controller.addTween('#clientes h3', TweenMax.from( $('#clientes h3'), .75, {css:{letterSpacing:20,opacity:0}, ease:Quad.easeOut}));
        controller.addTween('#clientes p', TweenMax.from( $('#clientes p'), 1, {css:{opacity:0}, ease:Quad.easeOut}));
        $('#clientes .gallery figure').css('position','relative').each(function() {
          controller.addTween('#clientes .gallery', TweenMax.from( $(this), 1, {delay:Math.random()*.2,css:{left:Math.random()*200-100,top:Math.random()*200-100,opacity:0}, ease:Back.easeOut}));
        });
      }
    });