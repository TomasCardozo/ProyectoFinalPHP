$(serchCity());

function serchCity(consulta){
    $.ajax({
        url: '../views/serch.php' ,
        type: 'POST' ,
        datatype: 'html',
        data: {consulta: consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function() {
        console.log("error");
    })
}

$(document).on('keyup', '#busqueda', function(){
    var value = $(this).val();
    if(value != ""){
        serchCity(value);
    }else{
        serchCity();
    }
});