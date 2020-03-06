<section class="blog">
    <div class="container">
      <div class="row">
        @if (!empty($datas))
            
                
            @foreach ($datas as $data)
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="blog-box mt-2 mb-2">
                <div class="row no-gutters row-eq-height pb-4">
                  <div class="col-sm-6 iq-shadow">
                    <div class="content">
                      <h5 class="mb-2">
                        <a href="{{ route('view.blog', $data->id) }}">
                          {!! ucfirst(substr($data->title,0,15)) !!}
                        </a>
                      </h5>
                      <ul>
                      <li><span>By:</span> <a href="#">{{$data->Author}}</a></li>
                        <li> {!! ucfirst(substr($data->updated_at,0,10)) !!}</li>
                      </ul>
                      
                      
                      <ul class="iq-tag mt-4">
                      <li><a href="#">{{$data->category->name}}</a></li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <img
                      class="img-fluid w-100"
                      src="{{asset('images/upload/'.$data->image_name)}}"
                      alt="image"
                    />
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        @endif
      </div>
    </div>
  </section>