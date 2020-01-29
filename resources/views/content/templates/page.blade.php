@extends('content/layout')

@section('head')
<title>{{ $page->title ?? null }}</title>
<!-- Open Graph -->
<!-- META tags -->
<!-- Style -->
@stop

@section('body')
{!! $page->content ?? null !!}
@stop

@section('script')
<!-- Pull in other scripts e.g. jQuery -->
@stop
