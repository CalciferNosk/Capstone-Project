$(document).ready(function () {
	$(".nav-link").on("click", function () {
		$(".nav-link").removeClass("active");
		$(this).addClass("active");
	});

	$(document).on("submit", "#login-form", function (e) {
		e.preventDefault();

		$.ajax({
			url: base_url + "login-user",
			type: "POST",
			data: $("#login-form").serialize(),
			dataType: "json",
			success: function (response) {
				if (response.code == 200) {
					window.location.reload();
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
