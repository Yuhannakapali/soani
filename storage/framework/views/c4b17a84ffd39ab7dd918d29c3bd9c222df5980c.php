<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
<div class="blog-intro">
  <?php $__env->startSection('blogIntro'); ?>
    <header>
      <?php $__env->startSection('blogHeader'); ?>
        <h1 class="blog-title" itemprop="name"><?php echo e($blog->getTitle()); ?></h1>
        <?php if($blog->getDescription()): ?>
          <p class="blog-description" itemprop="description"><?php echo e($blog->getDescription()); ?></p>
        <?php endif; ?>
      <?php echo $__env->yieldSection(); ?>
    </header>
    <footer>
      <?php $__env->startSection('blogFooter'); ?>
        <?php echo $__env->first($blog->bladeViews('feed.subscriptionLink'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->yieldSection(); ?>
    </footer>
  <?php echo $__env->yieldSection(); ?>
</div>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/blog/intro.blade.php ENDPATH**/ ?>