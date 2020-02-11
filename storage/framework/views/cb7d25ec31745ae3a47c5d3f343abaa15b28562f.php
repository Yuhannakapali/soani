<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entries \Illuminate\Support\Collection
 */
?>


<?php echo $__env->first($blog->bladeViews('custom.index-page'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title', $blog->getPageTitle()); ?>

<?php $__env->startPush('head'); ?>
  <link rel="canonical" href="<?php echo e($blog->urlToIndex()); ?>" />
  <?php echo $__env->first($blog->bladeViews('feed.metaLink'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('blog'); ?>
  <?php echo $__env->first($blog->bladeViews('blog.intro'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php if($entries->count()): ?>
    <ul class="blog-entry-list" aria-label="<?php echo e(__($blog->transKey('titles.latest_entries'))); ?>">
      <?php echo $__env->renderEach($blog->bladeView('entry.listItem'), $entries, 'entry'); ?>
    </ul>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($blog->bladeView('layouts.blog'), ['metaTags' => $blog], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/index.blade.php ENDPATH**/ ?>