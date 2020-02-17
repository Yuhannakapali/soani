<section class="blog">
    <div class="container">
      <div class="row">
        <?php if(!empty($datas)): ?>
            
                
            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="blog-box mt-2 mb-2">
                <div class="row no-gutters row-eq-height pb-4">
                  <div class="col-sm-6 iq-shadow">
                    <div class="content">
                      <h5 class="mb-2">
                        <a href="<?php echo e(route('Blog.show', $data)); ?>">
                            <?php echo e($data->title); ?>

                        </a>
                      </h5>
                      <ul>
                      <li><span>By:</span> <a href="#"><?php echo e($data->Author); ?></a></li>
                        <li><?php echo e($data->updated_at); ?></li>
                      </ul>
                      
                      
                      <ul class="iq-tag mt-4">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Style</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <img
                      class="img-fluid w-100"
                      src="<?php echo e(asset('images/upload/'.$data->image_name)); ?>"
                      alt="image"
                    />
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
      </div>
    </div>
  </section><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/section/blog.blade.php ENDPATH**/ ?>