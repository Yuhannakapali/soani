@extends('admin.layout.master') 


@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="team-box mt-5">
                <div class="team-img position-relative">
                    <img class="img-fluid ot-image team-1" src="{{asset('images/upload/'.$member->image_name)}}" alt="">
                    {{-- this was for hover but not used but i am putting here  
                    <img class="img-fluid team-2" src="{{asset('images/team/hover.jpg')}}" alt="">
                     --}}
                </div>
                <div class="mt-3 text-center">
                    <h5 class="title">{{$member->name}}</h5>
                    <p>{{$member->designation}}</p>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection