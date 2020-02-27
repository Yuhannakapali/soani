@extends('frontend.layout.master')
		@section('title')
			<title>SoAniTech | Home SoAniTech </title>
		@endsection			

		@section('content')
		{{-- @include('frontend.section.slider') --}}
		@include('frontend.section.aboutsoanitech')
		@include('frontend.section.services&ourteam')
		@include('frontend.section.maps')
		@include('frontend.section.feedback')
		@include('frontend.section.clientlist')
		@endsection
	