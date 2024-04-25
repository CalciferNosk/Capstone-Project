$(document).ready(function () {
	$(".nav-link").on("click", function () {
		$(".nav-link").removeClass("active");
		$(this).addClass("active");
		var content = $(this).data('content');
		$('.content').hide();
		$('#'+content).show();
	});


	
});


