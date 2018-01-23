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

});

