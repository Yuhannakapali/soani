<section class="iq-contactbox">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="contact-box">
            <h3>Get in Touch</h3>
            <form 
              class="form-validate"
              method="post"
              enctype="multipart/form-data"
              action="{{ route('contact.store') }}"
              class="p-0" 
            >
            {{ method_field('POST') }}
              <div class="contact-form mt-4">
                <div class="row">
                  @include('frontend.form.contactus_form')
                 
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 r-mt3">
          <div class="contact-bg">
            <h2>Contact Info</h2>
            <div class="row">
              <div class="col-sm-12">
                <ul class="iq-contact text-white">
                  <li>
                    <i class="fas fa-phone"></i>
                    
                    <p><a href="tel:+01-5532671">01-5532671</a></p>
                  </li>
                  <li>
                    <i class="fas fa-envelope"></i>
                    <p>
                      SoAniTech.com.np
                    </p>
                  </li>
                  <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <p>
                     Manbhawan Rd, lalitpur, Nepal
                    </p>
                  </li>
                </ul>
              </div>
              <div class="col-sm-12">
                <iframe
                  class="w-100 mt-3"
                  src="https://maps.google.com/maps?q=Soanitech&t=&z=15&ie=UTF8&iwloc=&output=embed"
                  style="border:0"
                  allowfullscreen
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>