@extends('layouts.app')

@section('landing-page')
    @include('partials.landing-view')
    @include('sections.recent-posts')
    @include('sections.categories')
    @include('sections.write-for-us')

@endsection
