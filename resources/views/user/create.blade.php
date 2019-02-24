@extends('layouts.form')

@section('title', 'Create User')

@section('breadcrumbs')
    @component('components.breadcrumb')
        @slot('title', 'Create User')
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create User</li>
    @endcomponent
@endsection

@section('form-title', 'Create User')

@section('form-content')
	<form action="{{ route('user.store') }}" method="POST" id="userInfo">
		@csrf
		@include('user.partials.form')
	</form>
@endsection

@section('js')
	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#userInfo').validate({
			    rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true
					},
					gender: {
						required: true
					},
					phone: {
						required: true
					},
					address: {
						required: true
					},
					preferredContact: {
						required: true
					},
					nationality:{
						required: true
					},
					dob: {
						required: true
					},
					education: {
						required: true
					}
			    },
			    messages: {
			        "name": {
			            required: "<small class='text-danger'>You must enter your name</small>",
			            minlength: "<small class='text-danger'>Please enter at least 2 characters</small>"
			        }, 
			        "gender": {
			            required: "<small class='text-danger'>Please select your gender</small>"
			        }, 
			        "email": {
			            required: "<small class='text-danger'>You must enter your email</small>",
			            email: "<small class='text-danger'>Email must be valid email address</small>"
			        },
			        "phone": {
			            required: "<small class='text-danger'>You must enter your phone number</small>"
			        },
			        "address": {
			        	required: "<small class='text-danger'>You must enter your address</small>"
			        },
			        "preferredContact": {
			        	required: "<small class='text-danger'>You must select preferred contact address</small>"
			        },
			        "nationality": {
			        	required: "<small class='text-danger'>You must enter your nationality</small>"
			        },
			        "dob": {
			        	required: "<small class='text-danger'>You must enter dob</small>"
			        },
			        "education": {
			        	required: "<small class='text-danger'>You must enter your education</small>"
			        }
			    },
			    errorPlacement: function(error, element) {
			        if ( element.attr("name") == "gender" )
			            error.insertAfter('.gender-error-placement');
			        else if  (element.attr("name") == "education" )
			            error.insertAfter(".education-error-placement");
			        else
			            error.insertAfter(element);
			    },
			    submitHandler: function(form) {
			    	form.submit();
			    },
			    invalidHandler: function(event, validator) {
			    	console.log('invalid');
			    	return false;
			    }
			});
		});
	</script>
@endsection