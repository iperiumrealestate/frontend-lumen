@extends('content/layout')

@section('head')
<title>{{ $property->reference }} property details</title>
@stop

@section('body')
<div class="row">
    <div class="col-xs-12">
        <h3>{{ $property->name }}</h3>
        <h1>{{ $property->heading }}</h1>
        <h2>{{ $property->subheading }}</h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <h3>Description</h3>
        {!! $property->detail !!}
    </div>
    <div class="col-xs-12">
        <h3>Photos</h3>
        <div class="row">
        @foreach ($property->photos as $photo)
            <div class="col-xs-6 col-md-4">
                <img class="img-responsive" src="{{ $photo->url }}" />
            </div>
        @endforeach
        </div>
    </div>
</div>
@stop