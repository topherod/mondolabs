// change text areas on landing every 10 seconds
setInterval(function() {
	if ($("#firstSlide").hasClass("active")) {
		$(".main-splash").removeClass("active");
		$("#secondSlide").addClass("active");
	} else if ($("#secondSlide").hasClass("active")) {
		$(".main-splash").removeClass("active");
		$("#thirdSlide").addClass("active");
	} else if ($("#thirdSlide").hasClass("active")) {
		$(".main-splash").removeClass("active");
		$("#firstSlide").addClass("active");
	} else {
		$("#firstSlide").addClass("active");
	}
}, 10000);