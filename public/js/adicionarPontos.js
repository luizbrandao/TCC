var i = 0;
$('#adicionar').click(function() {
	i++;
	$("#pontos").append('<div id="divCampo'+i+'"> <input type="text" id="campo['+i+']" name="campo['+i+']" class="campo"> <i class="icon-remove" title="Remover Ponto de Pauta" onClick="deletar('+i+')"></i><br></div> ')
});
function deletar(id){
	$("#divCampo"+id).remove();
}