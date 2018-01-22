$(document).ready(function(){

    var page = $('html, body');
    
    $('a.nav-link').click(function(){
        page.animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
        return false;
    });

});

