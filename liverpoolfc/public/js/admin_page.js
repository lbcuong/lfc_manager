
$(document).ready(function(){

	$("#input").on("keyup", function() {		//search player
	  var value = $(this).val().toLowerCase();
	  $("#table tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	  });
	});

	$(function(){
		$("#birth").datepicker({dateFormat: 'yy-mm-dd'});
		$("#sign").datepicker({dateFormat: 'yy-mm-dd'});
	});
});
