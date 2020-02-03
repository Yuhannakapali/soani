<div
    id="carouselExampleFade"
    class="carousel slide carousel-fade"
    data-ride="carousel"
>
    <div class="carousel-inner">
      $@foreach ($collection as $key=>$item)
          
      @endforeach
        <div class="carousel-item {{$key==0 ? 'active': ''}} feedback-box">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h5 class="title text-dark">
                        <i>
                           {{$testimonial->message}}
                        </i>
                    </h5>
                    <div class="name mt-5 ml-5">
                    <h4 class="sub-title">{{$testimonial->name}</h4>
                        <p>Project Manager, Ennnepal.com</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img
                        class="img-fluid"
                        src="{{assest('images/upload'.$testimonial->image_name)}}"
                        alt="image"
                    />
                </div>
            </div>
        </div>
        <div class="carousel-item feedback-box">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h5 class="title text-dark">
                        <i
                            >Soani Tech effectively Analyzed our data with great
                            results in Mobile Apps as well as in Desktop
                            Applications. They displayed our Survey Results so
                            effectively for our clients and for our students.
                            Great to Work with them!!!
                        </i>
                    </h5>
                    <div class="name mt-5 ml-5">
                        <h4 class="sub-title">Dr. Timothy Aryal</h4>
                        <p>HOD, Trichandra College</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img
                        class="img-fluid"
                        src="images/feedback/feedback-img2.png"
                        alt="image"
                    />
                </div>
            </div>
        </div>
        <div class="carousel-item feedback-box">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h5 class="title text-dark">
                        <i
                            >Soani Tech effectively Analyzed our data with great
                            results in Mobile Apps as well as in Desktop
                            Applications. They displayed our Survey Results so
                            effectively for our clients and for our students.
                            Great to Work with them!!!
                        </i>
                    </h5>
                    <div class="name mt-5 ml-5">
                        <h4 class="sub-title">Dr. Timothy Aryal</h4>
                        <p>HOD, Trichandra College</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img
                        class="img-fluid"
                        src="images/feedback/feedback-img2.png"
                        alt="image"
                    />
                </div>
            </div>
        </div>
    </div>
</div>
