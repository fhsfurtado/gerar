$(document).ready(function(){
    $('.tabs').tabs();
});

$('#search').on('keyup', function(){
    var substr = $(this).val().toString().toUpperCase();
    var size = substr.length;
    var exists = 0;
    var text = '';
    var table = $('.line-table');
    if(size>=2){
        for(var i=0;i<table.length;i++){
            exists = 0;
            for(var j=0;j<table[i].cells.length;j++){
                text = table[i].cells[j].innerHTML.toString().toUpperCase();
                if(text.indexOf(substr)!==-1){
                    document.getElementById("lista_usuarios").className = '';
                    document.getElementById("lista_usuarios").classList.add("highlight");
                    document.getElementById("lista_usuarios").classList.add("centered");
                    table[i].removeAttribute("style");
                    exists++;
                } else{
                    if(!exists)
                        table[i].style.display='none';
                }
                //console.log(table[i].cells[j].textContent);
            }
        }
    } else{
        for(var i=0;i<table.length;i++){
            table[i].removeAttribute("style");
        }
    }
});