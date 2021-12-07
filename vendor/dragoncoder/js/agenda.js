$(document).ready(function() {
    var capData = new Date();
    
    var ano = capData.getFullYear();
    var mes = capData.getMonth()+1;
    var dia = capData.getDate();
    if(dia<10){
        dia = '0'+dia;
    }
    var hoje = ano+'-'+mes+'-'+dia;
    console.log(hoje);
    $('div[id*=day]').each(function(){
        if($(this).attr('call')==hoje){
            $(this).attr('style','border: #ff3399 3px solid!important;')
        }
    })
    $.ajax({
        method: "POST",
        url: 'app/resources/calendarBuild.php',
        data: {},
        dataType: 'json',
        success: function(resposta){
            $('#calendario-draw').html(resposta.card);
            $('#month-name').html('<center>'+resposta.month+'</center>');
        },
        error: function(resposta){
            console.log(resposta);
            $('#calendario-draw').html('Ocorreu uma falha na requisição');
        }

    });
});
$('div[id*=day]').on('click', function(){
    alert('Você clicou na data '+$(this).attr('call'));
})

function voltaMes(){
    $.ajax({
        method: "POST",
        url: 'app/resources/calendarBuild.php',
        data: {mes: $('#mes_view').val(), ano: $('#ano_view').val(), act: '-'},
        dataType: 'json',
        success: function(resposta){
            $('#calendario-draw').html(resposta.card);
            $('#month-name').html('<center>'+resposta.month+'</center>');
        },
        error: function(resposta){
            console.log(resposta);
            $('#calendario-draw').html('Ocorreu uma falha na requisição');
        }

    });
}
function avancaMes(){
    $.ajax({
        method: "POST",
        url: 'app/resources/calendarBuild.php',
        data: {mes: $('#mes_view').val(), ano: $('#ano_view').val(), act: '+'},
        dataType: 'json',
        success: function(resposta){
            $('#calendario-draw').html(resposta.card);
            $('#month-name').html('<center>'+resposta.month+'</center>');
        },
        error: function(resposta){
            console.log(resposta);
            $('#calendario-draw').html('Ocorreu uma falha na requisição');
        }

    });
}