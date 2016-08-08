// Toggle Services Expansion
$('.service-list-item').on('click', function() {
	$('.service-list-item').not(this).removeClass('active');
  $(this).toggleClass('active');
});