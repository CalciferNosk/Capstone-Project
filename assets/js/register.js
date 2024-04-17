$(document).ready(function () {
	$(document).on("submit", "#register-form", function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "email_otp",
			type: "POST",
			data: $("#register-form").serialize(),
			dataType: "json",
			success: function (response) {
				if (response.code == 1) {
					$("#RegisterModal").modal("hide");
					$("#email_display").html(`<b>${response.email}</b>`);
					$("#OtpModal").modal("toggle");
				} else {
					alert(response.message);
				}
			},
			error: function (xhr, status, error) {
				console.log(xhr.responseText);
			},
		});
	});
});
