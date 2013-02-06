jQuery.ajax({
	url: "http://localhost:8080/GeraAta/public/index.php/usuarios/index/list-ajax&callback=?",
	type: "POST",
	dataType: 'json',
	success: function(data){
		for($i = 0; $i < data.length; $i++){
			$('#usuarios').append('<label class="checkbox"><input type="checkbox" name="presentes[]"  value="'+data[$i].nome+'">'+data[$i].nome+' </label>');
		}
	},
	error: function(){
		alert("falha");
	}
});