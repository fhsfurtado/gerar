$(document).ready(function() {
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
function voltaMes(){
    var month = $('#mes_view').val();
    var year  = $('#ano_view').val();
    if(month==1){
        month=12;
        year--;
    } else{
        month--;
    }
    $.ajax({
        method: "POST",
        url: 'app/resources/calendarBuild.php',
        data: {mes: month, ano: year},
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
    $('#mes_view').val(month);
    $('#ano_view').val(year);
}
function avancaMes(){
    var month = $('#mes_view').val();
    var year  = $('#ano_view').val();
    if(month==12){
        month=1;
        year++;
    } else{
        month++;
    }
    $.ajax({
        method: "POST",
        url: 'app/resources/calendarBuild.php',
        data: {mes: month, ano: year},
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
    $('#mes_view').val(month);
    $('#ano_view').val(year);
}