var i = 0;
		if( $('#pagina-ref').length )
        {
		} else {
		$("#ajax-pontos")
		.append(
				'<div id="pontos-div0"><label class="control-label" for="descricaco" id="desc0"></label><div class="controls"><textarea name="descPontos0" id="descPontos0"></textarea></div></div>');
		}
$('#adicionar')
		.click(
				function() {
					
					if( $('#pagina-ref').length )
        {            
		                       var numpontos = parseInt($("#qtdPautas").val());
								i =  numpontos+1;

		} else {
			i++;
		}
					$("#pontos")
							.append(
									'<div id="divCampo'
											+ i
											+ '"> <input type="text" name="pontos'
											+ i
											+ '" class="campo" data-ref="'
											+ i
											+ '"> <i class="icon-remove" title="Remover Ponto de Pauta" onClick="deletar('
											+ i + ')"></i><br></div> ')
					if ($($('#pontos' + i)).length) {
					} else {
						$("#qtdPautas").val(i);
						$("#ajax-pontos").append(
										'<div id="pontos-div'+ i
												+ '"><label class="control-label" for="descPontos'+i+'" id="desc'
												+ i
												+ '"></label><div class="controls"><textarea name="descPontos'
												+ i + '" id="descPontos'
												+ i + '"></textarea></div></div>');
					}
				});
function deletar(id) {
	$("#divCampo" + id).remove();
	$("#pontos-div" + id).remove();
}
