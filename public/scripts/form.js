/*$(document).ready(function () {
	$('.form__card').submit(function (event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function (result) {
				//location.reload();
				var status = JSON.parse(result).status;

				switch (status) {
					case '2':
						location.href = 'account/login';
						break;
				}
			},
		});
	});
});*/