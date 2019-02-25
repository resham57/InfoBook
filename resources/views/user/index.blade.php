@extends('layouts.index')

@section('title', 'User List')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
@endsection

@section('breadcrumbs')
    @component('components.breadcrumb')
        @slot('title', 'User Management')
        <li class="breadcrumb-item active" aria-current="page">Users</li>
    @endcomponent
@endsection

@section('action-btn')
    <a href="{{ route('user.create') }}" class="btn btn-primary button-primary">Create <i class="fa fa-plus" aria-hidden="true"></i></a>
@endsection

@section('index-content')
    @include('user.partials.index')
@endsection

@section('js')
	<script src="{{ asset('js/iziToast.min.js') }}"></script>
	<script>
		$(document).ready( function () {
		    $('#listTable').DataTable({
		    	responsive: true
		    });
		});
	</script>
	@if (session('status'))
	    <script>
	    	$(function(){
		    	iziToast.success({
		    	    message: "{{ session('status') }}"
		    	});
		    });
	    </script>
	@endif
@endsection