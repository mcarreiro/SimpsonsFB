function getEpisodes(event){
    var url = $('#season').attr('action');
    $.post(url,
     {temp: $("#season option:selected").val()},
        function(response) {
            if(response.error) {
                alert('Se produjo un error: ' + response.message.toString());
            } else {
                $('#episodios').find('option').remove();
                cargarEpisodios(response);
            }
        }
    );
    
    return false;
    
    }
    
    function buscarFrases(event){
   $('.ajaxLoader').css('visibility','visible');
   $('.errorLength').css('visibility','hidden');
    $('.noHayResultados').hide();
    var url = $('#fraseBuscada').attr('action');
    var fraseBuscada = $("#fraseBuscada").val();
    if(fraseBuscada.length <=3){
        $('.errorLength').css('visibility','visible');
        $('.ajaxLoader').css('visibility','hidden');
        //return false;
    } else {
    $.post(url,
     {frase: fraseBuscada
    },
        function(response) {
            if(response.error) {
                alert('Se produjo un error: ' + response.message.toString());
            } else {
                mostrarResultados(response);
            }
        }
    );
    }
    //$('.ajaxLoader').css('visibility','hidden');
    return false;
    
    }
    
    function cargarEpisodios(data) {
            for (key in data) {
                var html = '<option value='+ key + '>' + data[key] + '</option>';
                $("#episodios").append(html);
    }    
}

    function mostrarResultados(data) {
            $('.resultados').html('');
            if(data.length == 0){
                $('.noHayResultados').show();
                $('.ajaxLoader').css('visibility','hidden');  
            }
            
            for (key in data) {
                key = data[key];
                var bandera = 'Spain_flag_icon.png';
                if(key['lenguaje']==0){
                    bandera = 'mexico_flag_icon.jpg';
                }
                var html = '<div class="frase">'+ 
                   // '<img class="bandera" src="'+getRealURL()+'/images/banderas/Spain_flag_icon.png"/>'+
                  //  '<img href="#" class="cabeza" src="'+getRealURL()+'/images/cabezas/'+key['imagen']+'"/>'+
                    '<img class="bandera" src="http://localhost/sfb/web/images/banderas/'+bandera+'"/>'+
                    //'<a href="'+getRealURL()+'/frases/show/'+key['id']+'/"><img href="#" class="cabeza" src="http://localhost/sfb/web/images/cabezas/'+key['imagen']+'"/>'+
                    '<a href="http://localhost/sfb/web/app_dev.php/frase/show/'+key['id']+'"><img href="#" class="cabeza" src="http://localhost/sfb/web/images/cabezas/'+key['imagen']+'"/></a>'+
                    '<div class="infoFrase">'+
                         '<div class="frasePrincipal">'+key['frase']+'</div> <br/>'+
                        '<div class="detalleFrase">Episodio: '+key['episodio']+'<br/>'+
                             'Temporada: '+key['temporada']+'</div>'+
                    '</div>'  +
                    '<a class="modificacion" onclick="mandarSugerencia('+key['id']+')" >Alguna Modificación?</a>'+
                    '</div><br/>';
                var new_item = $(html).hide();
                $('.resultados').append(new_item);
                new_item.slideDown('slow'); 
    }
$('.ajaxLoader').css('visibility','hidden');    
}

function getRealURL() {
    var sharp = location.href.indexOf("#");
    if(sharp > 0 ) {
        return location.href.substring(0, sharp);
    } else {
        return document.URL;
    }
}

var dialogDefaults = {
    modal: true,
    width: 460,
    show: "blind",
    autoResize: true,
    resizable: true
}

function mandarSugerencia(id) {
    var opts = dialogDefaults;
    opts.title = "Sugerir Modificación";
    opts.height = 450;
    
    $("#idFrase").val(id);
    
    $("#dialogoSugerencia").dialog(opts);
}

function mandarMail(event){
    $('.ajaxLoaderMail').css('visibility','visible');
    var url = $('#mailForm').attr('action');
    $.post(url,
     {body: $("#sugerencia").val(),
       id: $("#idFrase").val() 
    },
        function(response) {
            if(response.error) {
                alert('Se produjo un error: ' + response.message.toString());
            } else {
                $('#resultadoMail').show();
                $('.ajaxLoaderMail').css('visibility','hidden');
                $( "#dialogoSugerencia" ).dialog("close");
            }
        }
   );
    return false;
    }