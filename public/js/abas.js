var $tabs = $('.tabbable li');

$('#prevtab').on('click', function() {
    $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
});

$('#nexttab').on('click', function() {
    $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
	$("#ajax-pontos").html("");
	$(".campo").each(function(index) {
    	$("#ajax-pontos").append('<label class="control-label" for="descricaco">'+$(this).val()+'</label><div class="controls"><textarea name="pontos'+index+'"></textarea></div>');
    });
});