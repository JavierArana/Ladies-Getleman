var imagen=1;
$(document).on("ready", inicio);

function inicio() {
    setInterval("Carrucel()",3000);
}

function Carrucel(){   
    //alert(imagen)
    if(imagen == $(".wall").size()){
        imagen=0;
    }
    $("#contenedor_imagenes").animate({
    marginLeft: (-1*imagen*$(".wall").eq(0).width())
    },700);
    imagen++;
}

