var capData = new Date();    
var ano = capData.getFullYear();
var mes = capData.getMonth()+1;
var dia = capData.getDate();
if(dia<10){
    dia = '0'+dia;
}
if(mes<10){
    mes = '0'+mes;
}
var hoje = ano+'-'+mes+'-'+dia;

$('div[id*=day]').on('click', function(){
    //alert('Você clicou na data '+$(this).attr('call'));
    dataView = $(this).attr('call');
    $('.modal').modal();
    $.ajax({
        method: "POST",
        url: 'app/resources/event.php',
        data: {data: dataView, act: 'getAll'},
        dataType: 'json',
        success: function(resposta){
            console.log(resposta);
        },
        error: function(resposta){
            console.log(resposta);
        }
    });
    $('#titulo_modal').html('Agenda: '+alterData(dataView));
});

$('div[id*=day]').each(function(){
    if($(this).attr('call')==hoje){
        $(this).attr('style','border: #ff3399 3px solid!important;')
    }
});

function alterData(data){
    var datAntiga = data;
    var dataNova = '';
    var str = datAntiga.split("-");
    console.log(data);
    for(var i = str.length-1;i>=0;i--){
        dataNova = dataNova+str[i];
        if(i>0){
            dataNova = dataNova+'/';
        }
    }
    return dataNova;
}