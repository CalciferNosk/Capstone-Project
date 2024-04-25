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
			beforeSend: function() {
				// Show the loading indicator
				$('.ajax-loader').show();
			},
			success: function (response) {
				if (response.code == 200) {
					success_toast()
					$('#LoginModal').modal('hide');
					$('.ajax-loader').show();

					setInterval(function() {
						window.location.reload();
					},1500)
				
					
					
				} else {
					error_toast(response.message)
					// console.log(response.message);
				}
			},
			complete: function() {
				// Hide the loading indicator
				$('.ajax-loader').hide();
			},
			error: function (xhr, status, error) {
				console.log(xhr.responseText);
			},
		});
		
	});

	function success_toast(){
		Toastify({
			text: "Login Successful",
			className: "info",
			gravity: "top", // `top` or `bottom`
			position: "center", // `left`, `center` or `right`
			style: {
			  background: "linear-gradient(to right, #00b09b, #96c93d)",
			}
		  }).showToast();
	}
	function error_toast(msg = 'error'){
		Toastify({
			text: msg,
			duration: 5000,
			// destination: "https://github.com/apvarun/toastify-js",
			// newWindow: false,
			// close: true,
			gravity: "top", // `top` or `bottom`
			position: "center", // `left`, `center` or `right`
			stopOnFocus: true, // Prevents dismissing of toast on hover
			style: {
			  background: "linear-gradient(to right, #ef093a, #fcacbd)",
			},
			onClick: function(){} // Callback after click
		  }).showToast();
	}

	
});
