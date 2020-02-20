$(document).ready(function(){
    /*Botão Mobile Menu */
    $('.ind-botao').on('click',function(){
          $('nav li').toggle();
    });

    /* Espaço vazio sobre os links do menu*/
    $('nav li').on('click',function() {
        var linke = $(this).children('a').attr('href');
        window.location.href=linke;
    });

    /*Slide de Fotos*/
    $('.ind-slide').cycle ({
        fx: 'fade'
    })

    /*Ao clilcar no campo Telefone*/
    $('#telefone').on('focus',function(){
        $(this).mask("(99) 9999-9999?9");
        $(this).on('keyup',function(){
            var tamanho=$(this).val();
            var numStr=tamanho.replace(/[^0-9]/g,'');
            var numStr2=numStr.length;

            if(numStr2 == 11){
                $(this).mask("(99) 99999-999?9");
            }else if (numStr2 == 10) {
                $(this).mask("(99) 9999-9999?9");
            }
        });
    });    
    
});

