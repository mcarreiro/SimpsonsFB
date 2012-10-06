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
                    var html = '<div class="frase clearfix">'+ 
                        '<img class="bandera" src="'+getRealURL()+'images/banderas/'+bandera+'"/>'+
                        '<a href="'+getRealURL()+'frase/show/'+key['id']+'"><img href="#" class="cabeza" src="'+getRealURL()+'images/cabezas/'+key['imagen']+'"/></a>'+
                        '<div class="infoFrase">'+
                            '<div class="frasePrincipal">'+key['frase']+'</div> <br/>'+
                            '<div class="detalleFrase">Episodio: '+key['episodio']+'<br/>'+
                                'Temporada: '+key['temporada']+'</div>'+
                        '</div>'  +
                        '<br/>'+  
                        '<a class="modificacion" onclick="mandarSugerencia('+key['id']+')" >Enviar Sugerencia</a>'+      
                        '<span id="'+key['id']+'" style="position:relative; float:right" id="shareThisSpan"></span>'+
                    '</div><br/>';
                var new_item = $(html).hide();
                $('.resultados').append(new_item);
                id  = 
                new_item.slideDown('slow'); 
                stWidget.addEntry({
                    "service":"facebook",
                    "element":document.getElementById(key['id']),
                    "url": 'http://www.simpsonsfb.com.ar/frase/show/'+key['id'],
                    "title":"Facebook",
                    "type":"button",
                    "summary":"Description"
                });                
    }
$('.ajaxLoader').css('visibility','hidden');    
}

function getRealURL() {
    var sharp = location.href.indexOf("#");
//    sharp = document.URL.split('/app')[0];
//    return sharp+'/';
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
    opts.height = 430;
    
    $("#idFrase").val(id);
    
    $("#dialogoSugerencia").dialog(opts);
}

function mandarMail(event){
    var url = $('#mailForm').attr('action');
    $.post(url,
     {body: $("#sugerencia").val(),
       id: $("#idFrase").val() 
    }/*,
        function(response) {
            if(response.error) {
                alert('Se produjo un error: ' + response.message.toString());
		$('.ajaxLoaderMail').css('visibility','hidden');
            } else {
                $('#resultadoMail').show();
                $('.ajaxLoaderMail').css('visibility','hidden');
                $( "#dialogoSugerencia" ).dialog("close");
            }
        }*/
   );
	$( "#dialogoSugerencia" ).dialog("close");
    return false;
	
    }
