@extends('frontend.layout.master')

    @section('title')
    <title>SoAniTech | Portfolio of SoAniTech </title>
    @endsection
   
    @section('content')

        @include('frontend.layout.breadcrums')
        @include('frontend.section.portfolio')
        
    @endsection
