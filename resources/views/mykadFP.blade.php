@extends('main')

@section('style')

@endsection

@section('css')

@endsection

@section('title', 'Mykad and Fingerprint reader')

@section('content')
<div class="ui center aligned grid">
	<div class="row">
	<div class="ten wide column">
    <div class="ui teal segment">
    	<form class="ui form">

			<div class="column">
	    		<div class="ui rounded small image bordered">
				  <img src="{{ asset('img/no-image.gif') }}" id="image">
				</div>
			</div>

		  <h4 class="ui dividing header">Biodata</h4>

		  <div class="field">
		    <div class="two fields">
		      <div class="field">
		    	<label>Full Name</label>
		        <input type="text" readonly name="name" placeholder="Full Name">
		      </div>
		      <div class="field">
		    	<label>MyKad Number</label>
		        <input type="text" readonly name="icnum" placeholder="MyKad Number">
		      </div>
		    </div>
		  </div>

		  <div class="field">
		    <div class="three fields">
		      <div class="field">
		    	<label>Gender</label>
		        <input type="text" readonly name="gender" placeholder="Gender">
		      </div>
		      <div class="field">
		    	<label>Date Of Birth</label>
		        <input type="text" readonly name="dob" placeholder="Date Of Birth">
		      </div>
		      <div class="field">
		    	<label>Birth Place</label>
		        <input type="text" readonly name="birthplace" placeholder="Birth Place">
		      </div>
		    </div>
		  </div>

		  <div class="field">
		    <div class="three fields">
		      <div class="field">
		    	<label>Race</label>
		        <input type="text" readonly name="race" placeholder="Race">
		      </div>
		      <div class="field">
		    	<label>Citizenship</label>
		        <input type="text" readonly name="citizenship" placeholder="Citizenship">
		      </div>
		      <div class="field">
		    	<label>Religion</label>
		        <input type="text" readonly name="religion" placeholder="Religion">
		      </div>
		    </div>
		  </div>

		  <h4 class="ui dividing header">Address</h4>
		  <div class="field">
		    <div class="inline fields">
		      <div class="eleven wide field">
		        <input type="text" readonly name="address1" placeholder="Address 1">
		      </div>
		      <div class="five wide field"><label>City</label>
		        <input type="text" readonly name="city" placeholder="City">
		      </div>
		    </div>
	      </div>
		  <div class="field">
		    <div class="inline fields">
		      <div class="eleven wide field">
		        <input type="text" readonly name="address2" placeholder="Address 2">
		      </div>
		      <div class="five wide field"><label>State</label>
		        <input type="text" readonly name="state" placeholder="State">
		      </div>
		    </div>
	      </div>
		  <div class="field">
		    <div class="inline fields">
		      <div class="eleven wide field">
		        <input type="text" readonly name="address3" placeholder="Address 3">
		      </div>
		      <div class="five wide field"><label>Postcode</label>
		        <input type="text" readonly name="postcode" placeholder="Postcode">
		      </div>
		    </div>
	      </div>
		      

		</form>

    </div>
	</div>
	</div>
	<div class="row">
	<div class="ten wide column">
    <div class="ui teal segment"></div>
	</div>
	</div>


	<div class="ui basic modal" id="read">
	  <div class="ui icon header">
	    <i class="yellow exclamation triangle icon"></i>Reading My card, Please Wait ...
	  </div>
	</div>

	<div class="ui basic modal" id="success">
	  <div class="ui icon header">
	    <i class="green check icon"></i></i>Read Success
	  </div>
	</div>

	<div class="ui basic modal" id="fail">
	  <div class="ui icon header">
	    <i class="red times icon"></i></i>Read Fail
	  </div>
	</div>

</div>

@endsection

@section('scripts')
		<script src="{{asset('js/mykadFP.js')}}"></script>
@endsection