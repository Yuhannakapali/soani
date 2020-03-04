
<section>
    <div class="iq-blogdetailbox">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 order-lg-2 order-2">
            
          </div>
          <div
            class="col-lg-9 col-md-12 col-sm-12 order-lg-1 order-2 re-space"
          >
            @if (!empty($data))
            <div class="iq-blogbox">
              <div class="iq-blog-entry">
                <div class="row">
                  <div class="col-sm-2 text-center">
                  <span class="date"><small></small></span>
                    <ul class="media-box mt-4 d-inline-block">
                      <li>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" 
                        class="twitter-share-button" data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </a>
                      </li>
                      <li>
                        <div class="fb-share-button" 
                        data-href="{{'https://yuhannakapali.com.np/blog/'.$data->title}}" 
                        data-layout="button">
                      </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-10">
                    <div class="iq-entry-image">
                      <img
                        class="img-fluid wow fadeInUp"
                        data-wow-duration="1.0s"
                        src="{{asset('images/upload/'.$data->image_name)}}"
                        alt="image"
                      />
                    </div>
                    <div class="iq-blog-detail mt-5">
                      {{-- <div
                        class="iq-entry-tag wow fadeInUp"
                        data-wow-duration="1.0s"
                      >
                        <span> fashion</span>
                        <span> style</span>
                      </div> --}}
                      <div
                        class="iq-entry-title wow fadeInUp"
                        data-wow-duration="1.0s"
                      >
                    <h5> {{$data->title}}</h5>
                        <div class="blog-box">
                          <ul>
                          <li>By: {{$data->Author}}</li>
                          <li>{{$data->updated_at}}</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="iq-detail-box mt-4">
                      {!! $data->body !!}
                    
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endif

          </div>
        </div>
      </div>
    </div>
  </section>