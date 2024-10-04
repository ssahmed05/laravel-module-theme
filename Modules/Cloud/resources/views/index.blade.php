@extends('cloud::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('cloud.name') !!}</p>
@endsection
