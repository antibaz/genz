@extends('layout.template')
@section('pageTitle', $Title .' '. LAConfigs::getByKey("sitename"))
@section('content')
    <div class="wrapper container">
        <h1>{{ $Title }}</h1>
        {!! $Description !!}
    </div>

@endsection