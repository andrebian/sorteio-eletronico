$( document ).ready(function() {
  
  $('#Sortear').click(function(){
        sorteados = $('#NumerosSorteados').html();
        min = $('#Min').val();
        max = $('#Max').val();
        $('#JaSorteados').slideDown('slow');
        
        $.ajax({
           url: "./include/GeraNumero.php", 
           data: "s="+sorteados+"&min="+min+"&max="+max,
           method: "post",        
           success: function(retorno) {
                if ( sorteados == '' ) {
                    sorteados = retorno;
                } else {
                    sorteados += " - "+retorno;
                }
                $('#NumeroSorteado').html(retorno);
                $('#NumerosSorteados').fadeOut();
                $('#NumerosSorteados').fadeIn();
                $('#NumerosSorteados').html(sorteados);
           },
        });
        return false;
  });
});