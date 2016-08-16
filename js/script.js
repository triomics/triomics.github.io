// morphing button 

(function() {
	var docElem = window.document.documentElement, didScroll, scrollPosition;

	// trick to prevent scrolling when opening/closing button
	function noScrollFn() {
		window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
	}

	function noScroll() {
		window.removeEventListener( 'scroll', scrollHandler );
		window.addEventListener( 'scroll', noScrollFn );
	}

	function scrollFn() {
		window.addEventListener( 'scroll', scrollHandler );
	}

	function canScroll() {
		window.removeEventListener( 'scroll', noScrollFn );
		scrollFn();
	}

	function scrollHandler() {
		if( !didScroll ) {
			didScroll = true;
			setTimeout( function() { scrollPage(); }, 60 );
		}
	};

	function scrollPage() {
		scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
		didScroll = false;
	};

	scrollFn();

	[].slice.call( document.querySelectorAll( '.morph-button' ) ).forEach( function( bttn ) {
		new UIMorphingButton( bttn, {
			closeEl : '.icon-close',
			onBeforeOpen : function() {
				// don't allow to scroll
				noScroll();
			},
			onAfterOpen : function() {
				// can scroll again
				canScroll();
			},
			onBeforeClose : function() {
				// don't allow to scroll
				noScroll();
			},
			onAfterClose : function() {
				// can scroll again
				canScroll();
			}
		} );
	} );
})();



$(document).ready(function() {
	particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 50,
      "density": {
        "enable": true,
        "value_area": 1200
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "triangle",
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
      "value": 0.5,
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
        "enable": false,
        "speed": 80,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 300,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 200,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 800,
        "size": 80,
        "duration": 2,
        "opacity": 0.8,
        "speed": 3
      },
      "repulse": {
        "distance": 400,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});

  $('.post-module').hover(function() {
    $(this).find('.description').stop().animate({
      height: "toggle",
      opacity: "toggle"
    }, 300);
  });

  $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columnWidth: '.grid-item'
    }
  });
});


$(document).ready(function(){

// таймер і макет для нього:

$('#counter').countdown('2016/10/01', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div class="countDays"><span class="position"><span class="digit static">%D</span></span><span class="boxName"><span class="Days">DAYS</span></span></div>'
    + '<div class="countHours"><span class="position"><span class="digit static">%H</span></span><span class="boxName"><span class="Hours">HOURS</span></span></div>'
    + '<div class="countMinutes"><span class="position"><span class="digit static">%M</span></span><span class="boxName"><span class="Days">Minutes</span></span></div>'
    + '<div class="countSeconds"><span class="position"><span class="digit static">%S</span></span><span class="boxName"><span class="Days">Seconds</span></span></div>'
  ));
});

// тайпед для Triomics 

$(function(){
      $(".accent-redirect").typed({
        strings: ["Triomics"],
        typeSpeed: 300
      });
  });

//ajax обробник форми

//ajax форма

$("#ajaxform").submit(function(){ 
var form = $(this); 
          var error = false; 
          form.find('input').each( function(){ 
            if ($(this).val() == '') { 
              $(".required").html('This field is required'); 
              error = true; 
            }
          });
          if (!error) { 
            var data = form.serialize(); 
            $.ajax({ 
              type: 'POST', 
              url: 'https://enasos.com.ua/triomics/send.php', 
              dataType: 'json', 
              data: data, 
                beforeSend: function(data) { 
                      form.find('input[type="submit"]').attr('disabled', 'disabled'); 
                    },
                success: function(data){ 
                    if (data['error']) { 
                      alert(data['error']); 
                    } else { // якщо все пішло добре
					            $(".required").css('display','none');
                    }
                  },
                complete: function(data) { 
                      form.find('input[type="submit"]').prop('disabled', false); 
                      $(".required").css('display','none');
                      $(".msg-sent").html('Message sent'); 
                      setTimeout(function(){$('.msg-sent').fadeOut();}, 2000);
                  }
                            
                });
                
          }
          return false; 
    });

})