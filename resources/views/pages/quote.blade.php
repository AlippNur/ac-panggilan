@extends('layouts.app')

@section('content')
@include('partials.pageheader', ['title' => 'Free Quote'])
@include('includes.quote-content')
@endsection