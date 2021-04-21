
$(document).ready(function(){

	$(window).scroll(function() {		//shrinking
		if ($(document).scrollTop() > 100) {
		  $('#pad').slideUp("fast");
		} else {
		  $('#pad').slideDown("fast");
		}	  	
	});

	$("#input").on("keyup", function() {		//search player
	  var value = $(this).val().toLowerCase();
	  $("#filter #filtering").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	  });
	});
});
