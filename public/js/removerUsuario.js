var id = 0;
$("button").each(function() {
	$(this).bind("click", function() {
		$('#myModal').modal();
		id = $(this).val();
    });
});

$("#confirma").click(function() {
	jQuery.ajax({
		url : "/GeraAta/public/index.php/usuarios/index/delete/id/" + id,
		type : "POST",
		dataType : 'json',
		success : function(data) {
			alert("Usuario removido com sucesso " + id);
		},
		error : function() {
			alert(id);
		}
	});
});