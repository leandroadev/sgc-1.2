@extends('layouts.app')

@section('title', 'Painel')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="{{ url('home') }}" class="list-group-item list-group-item-action active">{{ __('Painel') }}</a>
                <a href="{{ url('collaborators') }}" class="list-group-item list-group-item-action">{{ __('Colaboradores') }}</a>
                <a href="{{ url('#') }}" class="list-group-item list-group-item-action">{{__('Menu') }}</a>
                <a href="{{ url('#') }}" class="list-group-item list-group-item-action">{{__('Menu') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
