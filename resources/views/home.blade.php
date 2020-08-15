@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active">{{ __('Dashboard') }}</li>
                <li class="list-group-item"><a href="{{ url('collaborators') }}">{{ __('Colaboradores') }}</a></li>
                <li class="list-group-item">{{ __('Menu') }}</li>
                <li class="list-group-item">{{ __('Menu') }}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
