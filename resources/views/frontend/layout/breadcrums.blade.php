<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-12">
                <h1 class="title"> {{$pagename ?? ''}}</h1>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
                <ul>
                <li class="d-inline"><a href="{{'/'}}">{{$root ?? '' }}</a></li>
                    <li class="d-inline active">{{$pagename ?? ''}}</li>
                </ul>
            </div>
        </div>
    </div>
    <img class="img-fluid breadcrumbs-after" src="{{asset('images/banner/banner-after.png')}}" alt="image">
</div>