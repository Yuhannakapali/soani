<div class="main-content">
    <section class="feedback">
        <div class="container">
            <div class="row justify-content-md-center">
                <div
                    class="col-lg-8 col-md-12 col-sm-12 text-center position-relative"
                >
                    <div class="counter">
                        <div class="title-box">
                            <h2 class="title text-dark">
                                <span>Feedback</span>
                            </h2>
                            <p class="mt-4">
                                Some feedback from our costumers
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                id="carouselExampleFade"
                class="carousel slide carousel-fade"
                data-ride="carousel"
            >
                <div class="carousel-inner">
                    @foreach ($testimonials as $key=>$testimonial)
                    <div
                        class="carousel-item {{
                            $key == 0 ? 'active' : ''
                        }} feedback-box"
                    >
                        <div class="row mt-5 align-items-center">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <h5 class="title text-dark">
                                    <i>
                                        {!!$testimonial->message!!}
                                    </i>
                                </h5>
                                <div class="name mt-5 ml-5">
                                    <h4 class="sub-title">
                                        {{$testimonial->name}}
                                    </h4>
                                    <p>{{$testimonial->designation}}</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <img
                                    class="img-fluid"
                                    src="{{asset('images/upload/'.$testimonial->image_name)}}"
                                    alt="image"
                                />
                            </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
