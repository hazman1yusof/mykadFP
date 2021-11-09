
$(document).ready(function () {

	$('#readmykad').click(function(){
		alert('reading my kad');
		$.get( "http://localhost:2020/BioPakWeb/v2/readMyKad?EnablePhoto=true&ShowSplash=false&PhotoOnly=false&ValidateCard=false")
		  .done(function( data ) {
		    console.log(data);
		});
	});

	$('#matchfp').click(function(){

		
	});
	$('#patlist').click(function(){

		
	});
	$('#readmykid').click(function(){

		
	});
});