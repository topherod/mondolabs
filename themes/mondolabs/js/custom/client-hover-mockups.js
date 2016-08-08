$(".notable-client-list-item").mouseenter( function() {
  var clientListItemID = $(this).attr("id");
  var clientMockupID = "#mockup_" + clientListItemID + "";
  $(".client-list-mockup").removeClass("active");
  $(clientMockupID).addClass("active");
});
$(".notable-client-list-item").mouseleave( function() {
  var clientListItemID = $(this).attr("id");
  var clientMockupID = "#mockup_" + clientListItemID + "";
  $(clientMockupID).removeClass("active");
});