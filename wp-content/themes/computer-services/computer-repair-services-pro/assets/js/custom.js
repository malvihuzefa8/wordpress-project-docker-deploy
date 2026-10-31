/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

// SEARCH POPUP

jQuery(document).ready(function() {
  jQuery('a[href="#search"]').on('click', function(event) {                    
    jQuery('#search').addClass('open');
    jQuery('#search > form > input[type="search"]').focus();
  });            
  jQuery('#search, #search button.close').on('click keyup', function(event) {
    if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
      jQuery(this).removeClass('open');
    }
  });            
});

/* Mobile responsive Menu*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

  // ------------ Scroll Top ---------------

  var btn = jQuery('#return-to-top');

  jQuery(window).scroll(function() {
    if (jQuery(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    jQuery('html, body').animate({scrollTop:0}, '300');
  });




//Loader
jQuery(window).load(function() {
  jQuery(".preloader").delay(2000).fadeOut("slow");
});


var owl = jQuery('#slider .owl-carousel');
  owl.owlCarousel({
  margin: 0,
  nav:true,
  autoplay : true,
  lazyLoad: true,
  autoplayTimeout: 5000,
  loop: true,
  dots: false,
  navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 1
    },
    768: {
      items: 1
    },
    1000: {
      items: 1
    }
  },
  autoplayHoverPause : true,
  mouseDrag: true
});


  var owl = jQuery('.counter .owl-carousel');
  owl.owlCarousel({
  margin: 10,
  nav:false,
  autoplay : true,
  lazyLoad: true,
  autoplayTimeout: 5000,
  loop: true,
  dots: false,
  navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 2
    },
    768: {
      items: 3
    },
    1000: {
      items: 4
    }
  },
  autoplayHoverPause : true,
  mouseDrag: true
});

  var owl = jQuery('.testimonial .owl-carousel');
  owl.owlCarousel({
  margin: 30,
  nav:false,
  autoplay : false,
  lazyLoad: true,
  autoplayTimeout: 5000,
  loop: true,
  dots: true,
  navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 2
    },
    768: {
      items: 2
    },
    1000: {
      items: 3
    }
  },
  autoplayHoverPause : true,
  mouseDrag: true
});

  var owl = jQuery('#shop .owl-carousel');
  owl.owlCarousel({
  margin: 30,
  nav:false,
  autoplay : false,
  lazyLoad: true,
  autoplayTimeout: 5000,
  loop: true,
  dots: true,
  navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 2
    },
    768: {
      items: 3
    },
    1000: {
      items: 4
    }
  },
  autoplayHoverPause : true,
  mouseDrag: true
});

  var owl = jQuery('#appoinment .owl-carousel');
  owl.owlCarousel({
  margin: 30,
  nav:false,
  autoplay : false,
  lazyLoad: true,
  autoplayTimeout: 5000,
  loop: true,
  dots: true,
  navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1
    },
    576: {
      items: 2
    },
    768: {
      items: 3
    },
    1000: {
      items: 3
    }
  },
  autoplayHoverPause : true,
  mouseDrag: true
});


  var owl = jQuery('.tab-pane .owl-carousel');
  owl.owlCarousel({
  loop:true,
    margin:10,
   autoplay:true,
    nav:false,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
});
  
  


function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

//counter 

 jQuery('.count').each(function () {
      jQuery(this).prop('Counter',0).animate({
          Counter: jQuery(this).text()
      }, {
          duration: 10000,
          easing: 'swing',
          step: function (now) {
             jQuery(this).text(Math.ceil(now));
          }
      });
  });

 //sticky header

 jQuery(window).scroll(function() {
  var data_sticky = jQuery(' #header_navigation').attr('data-sticky');

  if (data_sticky == "true") {
    if (jQuery(this).scrollTop() > 1){  
      jQuery('#header_navigation').addClass("stickynavbar");
    } else {
      jQuery('#header_navigation').removeClass("stickynavbar");
    }
  }
});
 new WOW().init();


 jQuery(document).ready(function($){
    var dragging = false,
        scrolling = false,
        resizing = false;
    //cache jQuery objects
    var imageComparisonContainers = $('.cd-image-container');
    //check if the .cd-image-container is in the viewport 
    //if yes, animate it
    checkPosition(imageComparisonContainers);
    $(window).on('scroll', function(){
        if( !scrolling) {
            scrolling =  true;
            ( !window.requestAnimationFrame )
                ? setTimeout(function(){checkPosition(imageComparisonContainers);}, 100)
                : requestAnimationFrame(function(){checkPosition(imageComparisonContainers);});
        }
    });
    
    //make the .cd-handle element draggable and modify .cd-resize-img width according to its position
    imageComparisonContainers.each(function(){
        var actual = $(this);
        drags(actual.find('.cd-handle'), actual.find('.cd-resize-img'), actual, actual.find('.cd-image-label[data-type="original"]'), actual.find('.cd-image-label[data-type="modified"]'));
    });

    //upadate images label visibility
    $(window).on('resize', function(){
        if( !resizing) {
            resizing =  true;
            ( !window.requestAnimationFrame )
                ? setTimeout(function(){checkLabel(imageComparisonContainers);}, 100)
                : requestAnimationFrame(function(){checkLabel(imageComparisonContainers);});
        }
    });

    function checkPosition(container) {
        container.each(function(){
            var actualContainer = $(this);
            if( $(window).scrollTop() + $(window).height()*0.5 > actualContainer.offset().top) {
                actualContainer.addClass('is-visible');
            }
        });

        scrolling = false;
    }

    function checkLabel(container) {
        container.each(function(){
            var actual = $(this);
            updateLabel(actual.find('.cd-image-label[data-type="modified"]'), actual.find('.cd-resize-img'), 'left');
            updateLabel(actual.find('.cd-image-label[data-type="original"]'), actual.find('.cd-resize-img'), 'right');
        });

        resizing = false;
    }

    //draggable funtionality - 
    function drags(dragElement, resizeElement, container, labelContainer, labelResizeElement) {
        dragElement.on("mousedown vmousedown", function(e) {
            dragElement.addClass('draggable');
            resizeElement.addClass('resizable');

            var dragWidth = dragElement.outerWidth(),
                xPosition = dragElement.offset().left + dragWidth - e.pageX,
                containerOffset = container.offset().left,
                containerWidth = container.outerWidth(),
                minLeft = containerOffset + 10,
                maxLeft = containerOffset + containerWidth - dragWidth - 10;
            
            dragElement.parents().on("mousemove vmousemove", function(e) {
                if( !dragging) {
                    dragging =  true;
                    ( !window.requestAnimationFrame )
                        ? setTimeout(function(){animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);}, 100)
                        : requestAnimationFrame(function(){animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);});
                }
            }).on("mouseup vmouseup", function(e){
                dragElement.removeClass('draggable');
                resizeElement.removeClass('resizable');
            });
            e.preventDefault();
        }).on("mouseup vmouseup", function(e) {
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
        });
    }

    function animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement) {
        var leftValue = e.pageX + xPosition - dragWidth;   
        //constrain the draggable element to move inside his container
        if(leftValue < minLeft ) {
            leftValue = minLeft;
        } else if ( leftValue > maxLeft) {
            leftValue = maxLeft;
        }

        var widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
        
        $('.draggable').css('left', widthValue).on("mouseup vmouseup", function() {
            $(this).removeClass('draggable');
            resizeElement.removeClass('resizable');
        });

        $('.resizable').css('width', widthValue); 

        updateLabel(labelResizeElement, resizeElement, 'left');
        updateLabel(labelContainer, resizeElement, 'right');
        dragging =  false;
    }

    function updateLabel(label, resizeElement, position) {
        if(position == 'left') {
            ( label.offset().left + label.outerWidth() < resizeElement.offset().left + resizeElement.outerWidth() ) ? label.removeClass('is-hidden') : label.addClass('is-hidden') ;
        } else {
            ( label.offset().left > resizeElement.offset().left + resizeElement.outerWidth() ) ? label.removeClass('is-hidden') : label.addClass('is-hidden') ;
        }
    }
});


