$(function() { 
	$( "#datepicker" ).datepicker();
});

$(document).ready(function () {
var password = $("#passfield").val();
	
	$("#cpassfield").keyup(checkPasswordMatch);
	function checkPasswordMatch() {
	var password = $("#passfield").val();
	var confirmPassword = $("#cpassfield").val();
	
	if (password != confirmPassword)
		$("#divCheckPasswordMatch").html("Passwords do not match!");
	else
		$("#divCheckPasswordMatch").html("Passwords match.");
	}
});	

var loadFile = function(event) {
	$( "#blah" ).removeClass( "hide" );
	$( "#old" ).addClass( "hide" );
    var output = document.getElementById('blah');
    output.src = URL.createObjectURL(event.target.files[0]);
};