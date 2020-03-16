$(document).ready(function(){
    $(function(){
        $('.formMembre').submit(function(e){
            e.preventDefault();
            nom        = $(this).find('input[name=nom]').val();
            prenom     = $(this).find('input[name=prenom]').val();
            email      = $(this).find('input[name=email]').val();
            pays       = $(this).find('input[name=pays]').val();
            civilite   = $('input[name=civilite]:checked').val();
            accepte    = $(this).find('input[name=accepte]').prop('checked');
            newsletter = $(this).find('input[name=newsletter]').prop('checked');

            //console.log('test', nom, prenom, email, pays, civilite, newsletter, accepte);


                        $('.content-formulaire').slideUp('slow');
                        $('.message-felicitation').slideUp('slow');
                        $('.remerciement').slideDown('slow');
            return false;
        })
    })
});