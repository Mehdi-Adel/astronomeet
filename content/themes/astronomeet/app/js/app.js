import 'jquery';
import 'bootstrap';
import 'popper.js';
import 'is-in-viewport';
import 'jquery.scrollex';
import 'rellax';

var app = {
  init: function () {
    console.log('init');
    app.hideOnScroll();
  },

  // Gestion du hide & show au scroll:
  hideOnScroll: function () {
    var scroll = $(document).scrollTop();
      // Gere la hauteur avant déclenchement (correspondant à la hauteur de la nav)
      // var navHeight = $('.menu').outerHeight();
      // Si je souhaite plutot un déclenchement immédiat (mais je conserve la ligne précedente au cas ou).
      // var navHeight = 0;
    $(window).scroll(function () {

      var scrolled = $(document).scrollTop();
      // Au lieu d'utiliser un la hauteur de la nav, je regle manuellement l'apparition du bg
      if (scrolled > (200)) {
        $('.menu').addClass('animate');
      } else {
        $('.menu').removeClass('animate');
      }
      if (scrolled > scroll) {
        $('.menu').removeClass('sticky');
      } else {
        $('.menu').addClass('sticky');
      }
      // Je rajoute cette condition pour que le background disparaisse si on retourne en haut de la page, sur la vidéo:
      if (scrolled == 0) {
        $('.menu').removeClass('sticky');
      }
      scroll = $(document).scrollTop();

    });
  }
};

AOS.init({
  duration: 4000,
  delay: 400,
});


// Gestion de l'arret des contenus vidéos lorsqu'ils n'apparaissent pas à l'écran avec le plugin isInViewport:
jQuery(document).ready(function ($) {
  "use strict";
  
  $(window).scroll(function() {
      $('video').each(function(){
          if ($(this).is(":in-viewport( 0 )")) {
              $(this)[0].play();
          } else {
              $(this)[0].pause();
          }
      });
  });
});

$(app.init);

