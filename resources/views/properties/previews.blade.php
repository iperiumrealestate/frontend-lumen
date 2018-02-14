@extends('content/layout')

@section('head')
<title>Property previews</title>
@stop

@section('body')
<div class="row">
    <div class="col-xs-12">
        <h1>Property list</h1>
    </div>
</div>
<div class="row">
    @foreach ($previews as $property)
    <div class="col-xs-12 property property-preview">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-6">
                <img src="{{ $property->photo_url }}" />
            </div>
            <div class="col-xs-12 col-sm-8 col-md-6">
                <h3>{{ $property->heading }}</h3>
                <h5>{{ $property->subheading }}</h5>
                <p>{{ $property->preview }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="pull-right btn btn-default btn-lg" href="/sales/{{ $property->id }}">View details</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop