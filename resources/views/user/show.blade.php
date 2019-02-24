@extends('layouts.index')

@section('title', 'User Info')

@section('breadcrumbs')
    @component('components.breadcrumb')
        @slot('title', 'Create User')
        <li class="breadcrumb-item"><a href="{{ route('user.index') }}">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $dataToShow['name'] }}</li>
    @endcomponent
@endsection

@section('action-btn')
    <a href="{{ route('user.index') }}" class="btn btn-primary button-primary">Back</a>
@endsection

@section('index-content')
    @include('user.partials.info')
@endsection