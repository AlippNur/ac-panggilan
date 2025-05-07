@extends('layouts.app')

@section('content')
@include('partials.pageheader', ['title' => 'Testimonial'])
@include('includes.testimonial-content')
@endsection