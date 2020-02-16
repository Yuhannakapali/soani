<section>
    <div class="iq-blogdetailbox">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 order-lg-2 order-2">
            <div class="iq-post-sidebar">
              <div
                class="iq-sidebar-widget search-box wow fadeInUp"
                data-wow-duration="1.0s"
              >
                <div class="iq-widget-search">
                  <i class="ion-ios-search"></i>
                  <input
                    type="search"
                    placeholder="Search"
                    class="form-control placeholder"
                  />
                </div>
              </div>
              <div
                class="iq-sidebar-widget wow fadeInUp"
                data-wow-duration="1.0s"
              >
                <h5>Tags</h5>
                <ul class="iq-tag list-inline mt-3">
                  <li class="mt-2"><a href="#">Bootstrap</a>(1)</li>
                  <li class="mt-2"><a href="#">HTML5</a>(5)</li>
                  <li class="mt-2"><a href="#">Wordpress</a>(3)</li>
                  <li class="mt-2"><a href="#">CSS3</a>(7)</li>
                  <li class="mt-2"><a href="#">Creative</a>(6)</li>
                  <li class="mt-2"><a href="#">Multipurpose</a>(2)</li>
                  <li class="mt-2"><a href="#">Bootstrap</a>(7)</li>
                  <li class="mt-2"><a href="#">HTML5</a>(4)</li>
                  <li class="mt-2"><a href="#">Wordpress</a>(2)</li>
                </ul>
              </div>
              <div
                class="iq-sidebar-widget wow fadeInUp"
                data-wow-duration="1.0s"
              >  
                <h5>Recent Articles</h5>
                <div class="iq-widget-menu mt-4">
                  <div class="list-inline iq-widget-menu">
                    <ul class="iq-post">
                      <li class="mt-3">
                        <div class="post-img">
                          <img
                            src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-detail/01.jpg"
                            alt="#"
                          />
                        </div>
                        <div class="post-blog">
                          <div class="blog-box">
                            <ul>
                              <li>By: <a href="#">Admin</a></li>
                              <li>May 10, 2018</li>
                            </ul>
                          </div>
                          <a href="#">Consectetur adipiscing elit</a>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="post-img">
                          <img
                            src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-detail/02.jpg"
                            alt="#"
                          />
                        </div>
                        <div class="post-blog">
                          <div class="blog-box">
                            <ul>
                              <li>By: <a href="#">Admin</a></li>
                              <li>May 10, 2018</li>
                            </ul>
                          </div>
                          <a href="#">Eiusmod tempor incididunt</a>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="post-img">
                          <img
                            src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-detail/03.jpg"
                            alt="#"
                          />
                        </div>
                        <div class="post-blog">
                          <div class="blog-box">
                            <ul>
                              <li>By: <a href="#">Admin</a></li>
                              <li>May 10, 2018</li>
                            </ul>
                          </div>
                          <a href="#">Ut enim ad minim</a>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="post-img">
                          <img
                            src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-detail/04.jpg"
                            alt="#"
                          />
                        </div>
                        <div class="post-blog">
                          <div class="blog-box">
                            <ul>
                              <li>By: <a href="#">Admin</a></li>
                              <li>May 10, 2018</li>
                            </ul>
                          </div>
                          <a href="#">Quis nostrud exercitation</a>
                        </div>
                      </li>
                      <li class="mt-3">
                        <div class="post-img">
                          <img
                            src="https://iqonicthemes.com/themes/vizion/chatbot/images/blog/blog-detail/05.jpg"
                            alt="#"
                          />
                        </div> --}}
                        <div class="post-blog">
                          <div class="blog-box">
                            <ul>
                              <li>By: <a href="#">Admin</a></li>
                              <li>May 10, 2018</li>
                            </ul>
                          </div>
                          <a href="#">Excepteur sint occaecat</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-9 col-md-12 col-sm-12 order-lg-1 order-2 re-space"
          >
            <?php if(!empty($data)): ?>
            <div class="iq-blogbox">
              <div class="iq-blog-entry">
                <div class="row">
                  <div class="col-sm-2 text-center">
                  <span class="date"><small><?php echo e($data->updated_at); ?></small></span>
                    <ul class="media-box mt-4 d-inline-block">
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-google"></i></a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-10">
                    <div class="iq-entry-image">
                      <img
                        class="img-fluid wow fadeInUp"
                        data-wow-duration="1.0s"
                        src="<?php echo e(asset('images/upload/'.$data->image_name)); ?>"
                        alt="image"
                      />
                    </div>
                    <div class="iq-blog-detail mt-5">
                      
                      <div
                        class="iq-entry-title wow fadeInUp"
                        data-wow-duration="1.0s"
                      >
                    <h5> <?php echo e($data->title); ?></h5>
                        <div class="blog-box">
                          <ul>
                          <li>By: <?php echo e($data->Author); ?></li>
                          <li><?php echo e($data->updated_at); ?></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="iq-detail-box mt-4">
                      <?php echo $data->body; ?>

                    
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
                
            <?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </section><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/section/blogdetail.blade.php ENDPATH**/ ?>