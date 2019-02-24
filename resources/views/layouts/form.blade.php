@extends('layouts.app')

@section('content')
	@yield('breadcrumbs')
	<div class="row">
	    <div class="col-lg-12">
			<div class="card card--resizable">
			    <div class="card-header card-header__index">
			    	<h4 class="m-0">@yield('form-title')</h4>
			    	<div class="control-group">
			    		<i class="fa fa-minus card-minimize-icon" aria-hidden="true"></i>
			    		<i class="fa fa-window-maximize card-resize-icon" aria-hidden="true"></i>
			    	</div>
			    </div>
			    <div class="card-body card-minimizable">
			        @yield('form-content')
			    </div>
			</div>
		</div>
	</div>
@endsection