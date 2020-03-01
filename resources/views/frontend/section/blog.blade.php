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
                        <a href="{{ route('view.blog', $data->title) }}">
                            {{$data->title}}
                        </a>
                      </h5>
                      <ul>
                      <li><span>By:</span> <a href="#">{{$data->Author}}</a></li>
                        <li>{{$data->updated_at}}</li>
                      </ul>
                      <p class="mt-4">
                        {!! ucfirst(substr($data->body,0,20)) !!}
                        {{strlen($data->body)>20 ? '...' : ''}}
                      </p>
                      
                      {{-- <ul class="iq-tag mt-4">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Style</a></li>
                      </ul> --}}
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
        {{-- <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="blog-box mt-2 mb-2">
            <div class="row no-gutters row-eq-height pb-4">
              <div class="col-sm-6 iq-shadow">
                <div class="content">
                  <h5 class="mb-2">
                    <a href="blog-detail.html"
                      >Established fact that a reader will be</a
                    >
                  </h5>
                  <ul>
                    <li><span>By:</span> <a href="#">Admin</a></li>
                    <li>11 Feb 2020</li>
                  </ul>
                  <p class="mt-4">
                    Build virtual agents to automate business processes such
                    as front desk customer engagement.
                  </p>
                  <ul class="iq-tag mt-4">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Style</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6">
                <img
                  class="img-fluid w-100"
                  src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-img2.jpg"
                  alt="image"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="blog-box mt-2 mb-2">
            <div class="row no-gutters row-eq-height pb-4">
              <div class="col-sm-6 iq-shadow">
                <div class="content">
                  <h5 class="mb-2">
                    <a href="blog-detail.html"
                      >Established fact that a reader will be</a
                    >
                  </h5>
                  <ul>
                    <li><span>By:</span> <a href="#">Admin</a></li>
                    <li>11 Feb 2020</li>
                  </ul>
                  <p class="mt-4">
                    Build virtual agents to automate business processes such
                    as front desk customer engagement.
                  </p>
                  <ul class="iq-tag mt-4">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Style</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6">
                <img
                  class="img-fluid w-100"
                  src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-img3.jpg"
                  alt="image"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="blog-box mt-2 mb-2">
            <div class="row no-gutters row-eq-height pb-4">
              <div class="col-sm-6 iq-shadow">
                <div class="content">
                  <h5 class="mb-2">
                    <a href="blog-detail.html"
                      >Established fact that a reader will be</a
                    >
                  </h5>
                  <ul>
                    <li><span>By:</span> <a href="#">Admin</a></li>
                    <li>11 Feb 2020</li>
                  </ul>
                  <p class="mt-4">
                    Build virtual agents to automate business processes such
                    as front desk customer engagement.
                  </p>
                  <ul class="iq-tag mt-4">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Style</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6">
                <img
                  class="img-fluid w-100"
                  src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-img4.jpg"
                  alt="image"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="blog-box mt-2 mb-2">
            <div class="row no-gutters row-eq-height pb-4">
              <div class="col-sm-6 iq-shadow">
                <div class="content">
                  <h5 class="mb-2">
                    <a href="blog-detail.html"
                      >Established fact that a reader will be</a
                    >
                  </h5>
                  <ul>
                    <li><span>By:</span> <a href="#">Admin</a></li>
                    <li>12 Feb 2020</li>
                  </ul>
                  <p class="mt-4">
                    Build virtual agents to automate business processes such
                    as front desk customer engagement.
                  </p>
                  <ul class="iq-tag mt-4">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Style</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6">
                <img
                  class="img-fluid w-100"
                  src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-img5.jpg"
                  alt="image"
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="blog-box mt-2 mb-2">
            <div class="row no-gutters row-eq-height pb-4">
              <div class="col-sm-6 iq-shadow">
                <div class="content">
                  <h5 class="mb-2">
                    <a href="blog-detail.html"
                      >Established fact that a reader will be</a
                    >
                  </h5>
                  <ul>
                    <li><span>By:</span> <a href="#">Admin</a></li>
                    <li>11 Feb 2020</li>
                  </ul>
                  <p class="mt-4">
                    Build virtual agents to automate business processes such
                    as front desk customer engagement.
                  </p>
                  <ul class="iq-tag mt-4">
                    <li><a href="#">Design</a></li>
                    <li><a href="#">Style</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6">
                <img
                  class="img-fluid w-100"
                  src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-img6.jpg"
                  alt="image"
                />
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>