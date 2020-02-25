@extends('frontend.layout.master')
@section('tag')
    @include('frontend.section.tags')   
@endsection

@section('title')
    <title>SoAniTech  </title>
@endsection


@section('content')

@include('frontend.layout.blogbreadcrums')
@include('frontend.section.blogdetail')
    
@endsection