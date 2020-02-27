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
        
              <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="item">
                
                <div class="clients-box text-center">
                  <a href="<?php echo e('https://'.$client->url); ?> target="_blank""
                    ><img
                      class="img-fluid"
                      
                      src="<?php echo e(asset('images/upload/'.$client->image_name)); ?>"
                      alt="<?php echo e($client->name); ?>"
                      data-toggle="tooltip"
                      title="<?php echo e($client->name); ?>"
                    />
                  </a>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
            
            
          </div>
        </div>
      </section><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/section/clientlist.blade.php ENDPATH**/ ?>