
<div class="container">

    <div id="" class="d-block">
        <div class="row justify-content-md-center">
            <div class="col-lg-8 col-md-12 text-center">
                <div class="title-box">
                    <h2 class="title text-dark"> Our <span>Projects</span></h2>
                    <p class="mt-2">some of our finished Projects</p>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        <?php if(!empty($datas)): ?>
        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-2 col-md-3 col-sm-4 mt-5">
            <div class="clients-box text-center">
            <a href="<?php echo e('https://'.$data->url); ?>"><img class="img-fluid" src="<?php echo e(asset('images/upload/'.$data->image_name)); ?>"
                alt="<?php echo e($data->name); ?>" data-toggle="tooltip" title="<?php echo e($data->name); ?>"> </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    <?php endif; ?>
    </div>
    
</div><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/frontend/section/portfolio.blade.php ENDPATH**/ ?>