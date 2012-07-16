function getState(countryId) {	
var strURL="&country="+countryId;
$.ajax({
	type: "GET",
	url: "findState.php",
	data: strURL,
	cache: false,
	success: function(d){
	$('#statediv').show().html(d);
	}
});
}
function getCity(stateId) {	
var strURL="&state="+stateId;
$.ajax({
	type: "GET",
	url: "findCity.php",
	data: strURL,
	cache: false,
	success: function(d){
	$('#citydiv').show().html(d);
	}
});
}