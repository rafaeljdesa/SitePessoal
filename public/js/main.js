$(document).ready(function(){

    var page = $('html, body');
    
    $('a.nav-link').click(function(){
        page.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });
    
    $('#seta').click(function(){
        page.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });

    $('#form-contato').validate({
        rules: {
            nome: {
              required: true,
              minlength: 3
            },
            email: {
              required: true,
              minlength: 5
            },
            mensagem: {
              required: true,
              minlength: 10
            }
        }
    });

    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.card').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });

});

