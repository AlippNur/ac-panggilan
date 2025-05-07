@extends('layouts.app')

@section('content')
@include('partials.pageheader', ['title' => 'Our Team'])
@include('includes.team-content')
@endsection