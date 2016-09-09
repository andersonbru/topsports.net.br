$(document).ready(function(){
    //Validar Form
    $('.obrigatorio').change(function(){
        if($(this).val() || $(this).val()!=''){
            $(this).removeClass('inputErro');
        }
    });
    
    $('form.validarForm').submit(function(){
        
        var form_this = $(this);
        
        if($('div.aviso').is(':visible')){
            $('div.aviso').remove();
        }
        
        var erros = 0;
        $(form_this).find('.obrigatorio').each(function(){
            if(!$(this).val() || $(this).val()=='' || $(this).val()=='0'){
                $(this).addClass('inputErro');
                erros++;
            }
        });
        
        if(erros>=1){
            $(form_this).prepend('<div class="alert alert-danger alert-dismissible text-center aviso" role="alert">'+
                                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                                                '<strong>Existem campos obrigatórios sem preencher.</strong>'+
                                         '</div>');
            $('html,body').animate({scrollTop: $('.aviso').offset().top},'slow');
            return false;
        }
    });
    
    
    //$('.editor').summernote();
    /*
    $('.editor1').summernote({
      height: 400,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: false                 // set focus to editable area after initializing summernote
    });
    */
    $(".telefone")
    .mask("(99) 9999-99999")
    .focusout(function (event) {  
        var target, phone, element;  
        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
        phone = target.value.replace(/\D/g, '');
        element = $(target);  
        element.unmask();  
        if(phone.length > 10) {  
            element.mask("(99) 99999-9999");  
        } else {  
            element.mask("(99) 9999-9999");  
        }  
    });
    
    $('.cep').mask('99999-999');
    $('.cpf').mask('999.999.999-99');
    $('.cnpj').mask('99.999.999/9999-99');
    
    //Apenas numeros
    $('.sonumeros').keypress(function(event) {
        var tecla = (window.event) ? event.keyCode : event.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla != 8) return false;
            else return true;
        }
    });
    
});