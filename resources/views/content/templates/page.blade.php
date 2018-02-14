@extends('content/layout')

@section('head')
<title>{{ $page->title or null }}</title>
<!-- Open Graph -->
<!-- META tags -->
<!-- Style -->
@stop

@section('body')
{!! $page->content !!}
@stop

@section('script')
<!-- Pull in other scripts e.g. jQuery -->
@stop
