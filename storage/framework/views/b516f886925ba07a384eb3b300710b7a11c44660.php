
<section>
    <div class="iq-blogdetailbox">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-sm-12 order-lg-2 order-2">
            
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
             
                        <a href="https://www.facebook.com/sharer/sharer.php?"><i class="fab fa-facebook"></i></a>
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