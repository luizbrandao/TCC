$(document).ready(function(){
    $('#voltar').click(function(){
        parent.history.back();
        return false;
    });
});