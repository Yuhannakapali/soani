
<div class="container">

    <div id="" class="d-block">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12 text-center">
                <div class="title-box">
                    <h2 class="title text-dark"> Our <span>Projects</span></h2>
                    <p class="mt-2">some of our finished Projects</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        @if (!empty($datas))
        @foreach ($datas as $data)
        <div class="col-lg-2 col-md-3 col-sm-4 mt-5">
            <div class="clients-box text-center">
            <a href="{{'https://'.$data->url}}"><img class="img-fluid" src="{{asset('images/upload/'.$data->image_name)}}"
                alt="{{$data->name}}" data-toggle="tooltip" title="{{$data->name}}"> </a>
            </div>
        </div>
        @endforeach
        
    @endif
    </div>
    
</div>