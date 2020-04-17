
$('.js-scrollTo').on('click', function() { // Au clic sur un élément

    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate( { scrollTop: $(page).offset().top } , speed ); // Go
    return false;

});

$( ".g_img_item" ).hover(
    function() {
        $( this ).children(".lightcustom").css( "opacity", "1" );
    }, function() {
        $( this ).children(".lightcustom").css( "opacity", "0" );
    }
);

$(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$( "#home-tab" ).click(
    function() {
        $( "#descexp" ).addClass('hide');
        $( "#descstud" ).addClass('show');
        $( "#descexp" ).removeClass('show');
        $( "#descstud" ).removeClass('hide');
    }
);

$( "#profile-tab" ).click(
    function() {
        $( "#descexp" ).addClass('show');
        $( "#descstud" ).addClass('hide');
        $( "#descexp" ).removeClass('hide');
        $( "#descstud" ).removeClass('show');
    }
);


