@extends('frontend.layout.master')

@section('content')
    <h1>posts</h1>

    @if (count($post) > 1)
        @foreach ($posts as $post)
                <div class="">

                </div>
            
        @endforeach
            
        @else
            <p>No post found</p>
        @endif        
    @endif
@endsection