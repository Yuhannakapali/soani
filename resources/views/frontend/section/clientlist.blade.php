<section class="iq-clients">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-lg-12 col-sm-12 text-center">
        <div class="title-box">
          <h3 class="title text-dark">
             Some Satisfied <span> Client </span> Using  our Services
          </h3>
          <p class="mt-2">List of Satisfied costumers</p>
        </div>
      </div>
    </div>
    <div
      class="owl-carousel mt-4"
      data-autoplay="true"
      data-loop="true"
      data-nav="false"
      data-dots="true"
      data-items="5"
      data-items-laptop="5"
      data-items-tab="4"
      data-items-mobile="2"
      data-items-mobile-sm="1"
    >
    @if (!empty($clients))
        @foreach ($clients as $client)
        <div class="item">
          <div class="clients-box text-center">
            <a href="{{'https://'.$client->url}}" target="_blank""
              ><img
                class="img-fluid"
                
                src="{{asset('images/upload/'.$client->image_name)}}"
                alt="{{$client->name}}"
                data-toggle="tooltip"
                title="{{$client->name}}"
              />
            </a>
          </div>
        </div>
        @endforeach
    @endif
      
      
    </div>
  </div>
</section>