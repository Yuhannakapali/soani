<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>


<?php echo $__env->first($blog->bladeViews('custom.all-pages'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('body'); ?>
  <main class="blog" itemscope itemtype="http://schema.org/Blog">
    <?php echo $__env->yieldContent('blog'); ?>
  </main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
  <?php $__currentLoopData = $blog->stylesheetUrls(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stylesheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <link href="<?php echo e(url($stylesheet)); ?>" rel="stylesheet" type="text/css">
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($blog->bladeView('layouts.html'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/layouts/blog.blade.php ENDPATH**/ ?>