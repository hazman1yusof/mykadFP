
$(document).ready(function () {

	$('#readmykad').click(function(){
		chg_msg('read','Processing.. Please Wait..');

		$('.ui.basic.modal#read').modal({closable: false,transition:{
		    showMethod   : 'fade',
		    showDuration : 200,
		    hideMethod   : 'fade',
		    hideDuration : 200,}
		}).modal('show');

		$.get( "http://localhost:2020/BioPakWeb/v2/readMyKad?EnablePhoto=true&ShowSplash=false&PhotoOnly=false&ValidateCard=false")
		  .done(function( data ) {
		  	var msg = data.StatusMessage;
		  	var StatusCode = data.StatusCode;
		  	if(StatusCode!="0"){
		  		chg_msg('fail',msg);

				delay(function(){
		  			$('.ui.basic.modal#read').modal('hide');
				}, 1000 );
		  	}else{
		  		
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
			    // $("img#leftfp").attr('src','data:image/jpeg;base64,'+ret.LeftFinger);
			    // $("img#rightfp").attr('src','data:image/jpeg;base64,'+ret.RightFinger);

				var objdata = {
					'type' : 'mykad',
					'_token': $("input#_token").val(),
	                'name' : ret.GMPCName,
	                'icnum' : ret.IDNumber,
	                'gender' : ret.Gender,
	                'dob' : ret.BirthDate,
	                'birthplace' : ret.BirthPlace,
	                'race' : ret.Race,
	                'citizenship' : ret.Citizenship,
	                'religion' : ret.Religion,
	                'address1' : ret.Address1,
	                'address2' : ret.Address2,
	                'address3' : ret.Address3,
	                'city' : ret.City,
	                'state' : ret.State,
	                'postcode' : ret.Postcode,
	                'base64' : ret.Picture
	            }

	            $.post( "/store",objdata, function( data ) {
	                $('#overlay').fadeOut();
	            });

	            scanthumb();
		  	}
		  	

		}).fail(function() {
	  		chg_msg('fail', "Service not installed");
	  		
			delay(function(){
	  			$('.ui.basic.modal#read').modal('hide');
			}, 1000 );

  		});
	});

	function scanthumb(){
		chg_msg('read',"Please put thumbprint into biometric scanner");

		$.get( "http://localhost:2020/BioPakWeb/v2/matchMyKadFP?Timeout=10&FFDLevel=2&ShowSplash=false&Bitmap=false&Template=false")
		  .done(function( data ) {
		  	var msg = data.StatusMessage;
		  	var StatusCode = data.StatusCode;
		  	if(StatusCode != "0"){
		  		chg_msg('fail',msg);

				delay(function(){
		  			$('.ui.basic.modal#read').modal('hide');
				}, 1000 );
		  	}else{
		    	$("span#succmsg").text(msg)

				delay(function(){
			    	$('.ui.basic.modal#success').modal('hide');
				}, 1000 );
		  	}

		}).fail(function() {
	  		chg_msg('fail', "Service not installed");
	  		
			delay(function(){
	  			$('.ui.basic.modal#read').modal('hide');
			}, 1000 );

  		});

	}

	$('#matchfp').click(function(){
		$("span#failmsg,span#succmsg").text("")

		$('.ui.basic.modal#read').modal({closable: false,transition:{
		    showMethod   : 'fade',
		    showDuration : 200,
		    hideMethod   : 'fade',
		    hideDuration : -1,}
		}).modal('show');

		$.get( "http://localhost:2020/BioPakWeb/v2/matchMyKadFP?Timeout=10&FFDLevel=2&ShowSplash=false&Bitmap=false&Template=false")
		  .done(function( data ) {
		  	var msg = data.StatusMessage;
		  	var StatusCode = data.StatusCode;
		  	if(StatusCode != "0"){
		    	$('.ui.basic.modal#read').modal('hide');
		    	$("span#failmsg").text(msg)
		    	delay(function(){
			    	$('.ui.basic.modal#fail').modal('show');
				}, 300 );
		  	}else{

		    	$("span#succmsg").text(msg)

	            $('.ui.basic.modal#read').modal('hide');
			    $('.ui.basic.modal#success').modal('show');

				delay(function(){
			    	$('.ui.basic.modal#success').modal('hide');
				}, 1500 );
		  	}

		}).fail(function() {
		    $('.ui.basic.modal#read').modal('hide');
		    $('.ui.basic.modal#fail').modal('show');

		    delay(function(){
		    	$('.ui.basic.modal#fail').modal('hide');
			}, 1500 );

  		}).always(function() {
		  	// modal.modal('hide');
		});
	});

	function chg_msg(state,msg){
		if(state == 'fail'){
			$('i.green,i.yellow').hide();
			$('i.red').fadeIn();

			$('span#msg').text('Fail - '+msg);
		}else if(state == 'success'){
			$('i.red,i.yellow').hide();
			$('i.green').fadeIn();

			$('span#msg').text('Success - '+msg);
		}else{
			$('i.red,i.green').hide();
			$('i.yellow').fadeIn();

			$('span#msg').text(msg);
		}
	}

});

var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();