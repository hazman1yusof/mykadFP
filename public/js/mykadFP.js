
$(document).ready(function () {

	$('#readmykad').click(function(){

		$('.ui.basic.modal#read').modal({closable: false,transition:{
		    showMethod   : 'fade',
		    showDuration : 200,
		    hideMethod   : 'fade',
		    hideDuration : -1,}
		}).modal('show');

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
		    // $("img#leftfp").attr('src','data:image/jpeg;base64,'+ret.LeftFinger);
		    // $("img#rightfp").attr('src','data:image/jpeg;base64,'+ret.RightFinger);
		    $('.ui.basic.modal#read').modal('hide');
		    $('.ui.basic.modal#success').modal('show');

			delay(function(){
		    	$('.ui.basic.modal#success').modal('hide');
			}, 1500 );

			var objdata = {
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

            $.post( "./store",objdata, function( data ) {
                $('#overlay').fadeOut();
            });

		}).fail(function() {
		    $('.ui.basic.modal#read').modal('hide');
		    $('.ui.basic.modal#fail').modal('show');

		    delay(function(){
		    	$('.ui.basic.modal#fail').modal('hide');
			}, 1000 );

  		}).always(function() {
		  	// modal.modal('hide');
		});
	});

	$('#matchfp').click(function(){

		
	});
	$('#patlist').click(function(){

		
	});
	$('#readmykid').click(function(){

		
	});
});

var delay = (function(){
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();