// Toggle Modal Menu
$('#hamburgerToggle').on('click', function() {
  $('#menuModal').toggleClass('active');
  $('#hamburgerToggle').toggleClass('active');
  if ($(window).width() > 960) {
	  $('#menuSearch').focus();
	}
});