$(document).ready(function(){

$('header,#menu,#banner,#content,footer').css('display', 'none');
$('#loading').css('display', 'initial');


    var v_data;
if ($_GET('lng') == null){

    if (navigator.appName == 'Netscape' || 'Microsoft Internet Explorer' || 'Opera')
        var idioma = navigator.language;
    else
        var idioma = navigator.browserLanguage;

    // alert(idioma);



 

} else {
    var idioma = $_GET('lng');
}

 v_data = loadLanguaje(v_data, idioma);
    $('header').load('header.html', function(){

        changeLanguaje(v_data, 'header');

       
    $('header .lang').val(idioma);        


    $('header .lang').change(function(){
        var span;
        
        switch($(this).val()){
            case 'es':
                idioma = 'es';
                span = "<span class='icon icon-es'></span>";
                break;
            case 'en':
                idioma = 'en';
                span = "<span class='icon icon-en'></span>";
                break;
            case 'nl':
                idioma = 'nl';
                span = "<span class='icon icon-nl'></span>";
                break;
            default:
                span = "<span class='icon '></span>";
                break;
        }

        window.location.href = window.location.pathname + '?lng=' + idioma;

       /*

         v_data = loadLanguaje(v_data, idioma);

        $('header').load('header.html', function(){
            changeLanguaje(v_data, 'header');
            switch(idioma){
                case 'es':
                    $('header .lang').val('1');
                    break;
                case 'en':
                    $('header .lang').val('2');
                    break;
                case 'nl':
                    $('header .lang').val('3');
                    break;

            }

             $('header .div-lang').html('<div>' + $('option:selected',this).text() + '</div>' + span);

        });

        $('footer').load('footer.html', function(){
            changeLanguaje(v_data, 'footer');
        });

        $('#banner').load('banner.html', function(){
            changeLanguaje(v_data, '#banner');
        });

        $('#menu').load('menu.html', function(){
            changeLanguaje(v_data, '#menu');
        });
*/
    });

    });


    $('#menu').load('menu.html', function(){

        changeLanguaje(v_data, '#menu');

    });
    $('#banner').load('banner.html', function(){


        changeLanguaje(v_data, '#banner')
     var options = {
        autoPlay: true,
        nextButton: true,
        prevButton: true,
        preloader: true,
        navigationSkip: false
    };
    var sequence = $("#sequence").sequence(options).data("sequence");

    $("#sequence").sequence(options).data("sequence").afterLoaded = function(){
        $(".sequence-prev, .sequence-next").fadeIn(500);
    }

});

    changeLanguaje(v_data, '#content');

    $('footer').load('footer.html', function(){

        changeLanguaje(v_data, 'footer');

    });





$('header,#menu,#banner,#content,footer').css('display', 'block');
$('#loading').css('display', 'none');

});


function changeLanguaje(data, element){

    if (data != null) {

        var re;
        $.each(data, function(key, val){


           // alert('key: ' + key + ' val: ' + val);

           if (key == element){

            $.each(val, function(key2, val2){

                re = new RegExp(key2, 'g');

               $(element).html($(element).html().replace(re, val2));
           });


        }

    });

    } 
}


function loadLanguaje(v_data, idioma){


      $.ajaxSetup({
        async: false
    });

    $.getJSON('lang.json', function( data){

        $.each(data, function(k, v){
            if (idioma.indexOf(k) >= 0){
                v_data = v;
            }
        });
        

    }).fail(function(){

        alert('fail');

    }).done(function(data){

        if (v_data == null){

            $.each(data, function(k, v){

                if (k.indexOf('es') >= 0){
                    v_data = v;
                }
            });
        } 



    });

    $.ajaxSetup({
        async: true
    });


    return v_data;

}


function $_GET(param)
{
/* Obtener la url completa */
url = document.URL;
/* Buscar a partir del signo de interrogación ? */
url = String(url.match(/\?+.+/));
/* limpiar la cadena quitándole el signo ? */
url = url.replace("?", "");
/* Crear un array con parametro=valor */
url = url.split("&");

/* 
Recorrer el array url
obtener el valor y dividirlo en dos partes a través del signo = 
0 = parametro
1 = valor
Si el parámetro existe devolver su valor
*/
x = 0;
while (x < url.length)
{
p = url[x].split("=");
if (p[0] == param)
{
return decodeURIComponent(p[1]);
}
x++;
}
}