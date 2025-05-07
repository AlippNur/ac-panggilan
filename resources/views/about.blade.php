@extends('layouts.app')

@section('content')
@include('partials.pageheader', ['title' => 'About'])
@include('includes.about-content')
@include('includes.team-content')
@endsection


