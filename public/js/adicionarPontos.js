var i = 0;
$("#ajax-pontos")
		.append(
				'<div id="pontos-div0"><label class="control-label" for="descricaco" id="desc0"></label><div class="controls"><textarea name="pontos0" id="pontos0"></textarea></div></div>');

$('#adicionar')
		.click(
				function() {
					i++;
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
						$("#ajax-pontos")
								.append(
										'<div id="pontos-div'
												+ i
												+ '"><label class="control-label" for="descricaco" id="desc'
												+ i
												+ '"></label><div class="controls"><textarea name="pontos'
												+ i + '" id="pontos' + i
												+ '"></textarea></div></div>');
					}
				});
function deletar(id) {
	$("#divCampo" + id).remove();
	$("#pontos-div" + id).remove();
}
