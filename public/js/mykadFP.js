
$(document).ready(function () {

	$('#readmykad').click(function(){
		alert('reading my kad');
		$.get( "http://localhost:2020/BioPakWeb/v2/readMyKad?EnablePhoto=true&ShowSplash=false&PhotoOnly=false&ValidateCard=false")
		  .done(function( data ) {
		  	var ret = data.Data;
		    $("input[name='name']").val(ret.GMPCName);
		    $("input[name='icnum']").val(ret.IDNumber);
		    $("input[name='gender']").val(ret.Gender);
		    $("input[name='dob']").val(ret.BirthDate);
		    $("input[name='birthplace']").val(ret.BirthPlace);
		    $("input[name='race']").val(ret.Race);
		    $("input[name='citizenship']").val(ret.Citizenship);
		    $("input[name='religion']").val(ret.Religion);
		    $("input[name='address1']").val(ret.Address1);
		    $("input[name='address2']").val(ret.Address2);
		    $("input[name='address3']").val(ret.Address3);
		    $("input[name='city']").val(ret.City);
		    $("input[name='state']").val(ret.State);
		    $("input[name='postcode']").val(ret.Postcode);
		    $("img#image").attr('src','data:image/png;base64,'+ret.Picture);
		    $("img#leftfp").attr('src','data:image/jpeg;base64,'+ret.LeftFinger);
		    $("img#rightfp").attr('src','data:image/jpeg;base64,'+ret.RightFinger);
		});
	});

	$('#matchfp').click(function(){

		
	});
	$('#patlist').click(function(){

		
	});
	$('#readmykid').click(function(){

		
	});
});