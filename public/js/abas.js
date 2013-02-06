var $tabs = $('.tabbable li');
$("#tab2")
$('#prevtab').on('click', function() {
    $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
    idAtivo = $('#tab3').attr("class");
    if(idAtivo=="tab-pane active") {
        revisao ();
    }
    idAtivotb2 = $('#tab2').attr("class");
    if(idAtivotb2=="tab-pane active") {
        pontos();
    }


});

$('#nexttab').on('click', function() {
    $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
	
    idAtivo = $('#tab3').attr("class");
    if(idAtivo=="tab-pane active") {
        revisao ();
    }
	
    idAtivotb2 = $('#tab2').attr("class");
    if(idAtivotb2=="tab-pane active") {
        pontos();
    }

});
function pontos(id) {
    //$("#ajax-pontos").html("");
    $(".campo").each(function(index) {
        ref = $(this).attr("data-ref");
        $("#desc"+ref).html($(this).val());
    });

}
function revisao () {
    $("#Lista-pontos-ajax").html("");
    $("#data-ajax").html("");
    $("#assunto-ajax").html("");
    $("#descricao-ajax").html("");
    $("#presentes-ajax").html("");

    var data = $("#data-form").val();
    var assunto = $("#assunto-form").val();
    var descricao = $("#descricao-form").val();

    $("#data-ajax").html(data);
    $("#assunto-ajax").html(assunto);
    $("#descricao-ajax").html(descricao);

    $("#presentes-ajax").html("");//Limpa o campo Pessoas Presentes

    $("input[type=checkbox]").each(function(index) {
        if($(this).is(':checked')) {
            $("#presentes-ajax").append('<li>'+$(this).val()+'</li>');

        }
    });
	
    // LIsta Pontos Ajax
    $(".campo").each(function(index) {
        ref = $(this).attr("data-ref");
        idtextarea = "#pontos"+ref;
		
        var data = $(idtextarea).val();
        var valorTextArea = data.replace(/\n/g,"<br>");
		  
        $("#Lista-pontos-ajax").append('<div class="lista-pontos"><strong>'+$(this).val()+'</strong><br>'+valorTextArea+'</div>');
    });
}