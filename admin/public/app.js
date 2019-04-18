var logout = () => {
	var payload = {
		logout: true
	}
	$.ajax({
		type: "POST",
		url: './',
		data: payload,
		// success: success,
		// dataType: dataType
	});
}