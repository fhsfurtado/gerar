$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.fixed-action-btn').floatingActionButton();
});

function goTo(act){
    if(act!=''){
        window.location.href='?page='+act;
    }
}
function goHome(){
    window.location.href='/gesta';
}