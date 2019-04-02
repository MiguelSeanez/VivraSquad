$(document).ready(function(){

    // Efecto Menu
        $('.menu a').each(function(index, elemento){
            $(this).css({
                'top': '-200px'
            });
    
            $(this).animate({
                top: '0'
            }, 1000 + (index * 300));
        });

        if( $(window).width() > 800 ){
            $('.textos').css({
                opacity: 0,
                marginTop: 0
            });
    
            $('.textos').animate({
                opacity: 1,
                marginTop: '-52px'
            }, 1500);
        }

    });