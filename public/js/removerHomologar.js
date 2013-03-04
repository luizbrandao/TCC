$(".status" ).each(function (i) {
	if($(this).val() == 1) {
		ref = $(this).attr("alt");
		$(ref).hide();
	}
});