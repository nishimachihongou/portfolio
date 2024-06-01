    'use strict';

    $(window).scroll(function(){
      if($(this).scrollTop()>320){
          console.log($(this).scrollTop());
          $('#fusa1,#fusa2').addClass('fix');
        };
        if($(this).scrollTop()<10){
          $('#fusa1,#fusa2').removeClass('fix');
        };
      }); //window_scroll


      $(document).ready(function(){
        $('#open_nav').on('click',function(){
            $('.main-nav').toggleClass('show');
        });
    });

    $(document).ready(function(){
      $('.flexslider').flexslider ({
        animation:"slide",
        slideshowSpeed:1000,
        animationSpeed:300,
        directionNav:false,
        controlNav:false,
        animationLoop:false,
      });
    });
