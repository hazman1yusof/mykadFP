@extends('main')

@section('style')

@endsection

@section('css')

@endsection

@section('title', 'Emergency Department')

@section('content')
<div class="ui center aligned grid">
	<div class="row">
	<div class="ten wide column">
    <div class="ui teal segment">
    	<form class="ui form">
    		<div class="ui rounded small image">
			  <img src="{{ asset('img/no-image.gif') }}">
			</div>

		  <h4 class="ui dividing header">Biodata</h4>

		  <div class="field">
		    <div class="two fields">
		      <div class="field">
		    	<label>Full Name</label>
		        <input type="text" name="name" placeholder="Full Name">
		      </div>
		      <div class="field">
		    	<label>MyKad Number</label>
		        <input type="text" name="icnum" placeholder="MyKad Number">
		      </div>
		    </div>
		  </div>

		  <div class="field">
		    <div class="three fields">
		      <div class="field">
		    	<label>Gender</label>
		        <input type="text" name="gender" placeholder="Gender">
		      </div>
		      <div class="field">
		    	<label>Date Of Birth</label>
		        <input type="text" name="dob" placeholder="Date Of Birth">
		      </div>
		      <div class="field">
		    	<label>Birth Place</label>
		        <input type="text" name="birthplace" placeholder="Birth Place">
		      </div>
		    </div>
		  </div>

		  <div class="field">
		    <div class="three fields">
		      <div class="field">
		    	<label>Race</label>
		        <input type="text" name="race" placeholder="Race">
		      </div>
		      <div class="field">
		    	<label>Citizenship</label>
		        <input type="text" name="citizenship" placeholder="Citizenship">
		      </div>
		      <div class="field">
		    	<label>Religion</label>
		        <input type="text" name="religion" placeholder="Religion">
		      </div>
		    </div>
		  </div>

		  <h4 class="ui dividing header">Address</h4>
		  <div class="field">
		    <div class="inline fields">
		      <div class="eleven wide field">
		        <input type="text" name="address1" placeholder="Address 1">
		      </div>
		      <div class="five wide field"><label>City</label>
		        <input type="text" name="city" placeholder="City">
		      </div>
		    </div>
	      </div>
		  <div class="field">
		    <div class="inline fields">
		      <div class="eleven wide field">
		        <input type="text" name="address2" placeholder="Address 2">
		      </div>
		      <div class="five wide field"><label>State</label>
		        <input type="text" name="state" placeholder="State">
		      </div>
		    </div>
	      </div>
		  <div class="field">
		    <div class="inline fields">
		      <div class="eleven wide field">
		        <input type="text" name="address3" placeholder="Address 3">
		      </div>
		      <div class="five wide field"><label>Postcode</label>
		        <input type="text" name="postcode" placeholder="Postcode">
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

</div>
@endsection

@section('scripts')
		<script src="{{asset('js/mykadFP.js')}}"></script>
@endsection