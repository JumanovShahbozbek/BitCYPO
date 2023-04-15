@extends('layouts.main')
@section('main', 'active')
@section('content')

    <!-- start slider section -->
        @include('section.slide')
    <!-- end slider section -->

    <!-- wallet -->
        @include('section.wallet')
    <!-- end wallet -->

    <!-- about -->
        @include('section.about')
    <!-- end about -->

    <!-- graf -->
        @include('section.graf')
    <!-- end graf -->

    <!-- testimonial -->
        @include('section.testimo')
    <!-- end testimonial -->

    <!-- works -->
        @include('section.work')
    <!-- works -->
    
    <!-- contact -->
        @include('section.contact')
    <!-- end contact -->
    
@endsection