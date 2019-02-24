@extends('layouts.app')

@section('content')
	@yield('breadcrumbs')
	<div class="row">
	    <div class="col-lg-12">
			<div class="card card--resizable">
			    <div class="card-header card-header__index">
			    	<div class="control-group">
			    		<i class="fa fa-minus card-minimize-icon" aria-hidden="true"></i>
			    		<i class="fa fa-window-maximize card-resize-icon" aria-hidden="true"></i>
			    	</div>
			    	@yield('action-btn')
			    </div>
			    <div class="card-body card-minimizable">
			        @yield('index-content')
			    </div>
			</div>
		</div>
	</div>
@endsection