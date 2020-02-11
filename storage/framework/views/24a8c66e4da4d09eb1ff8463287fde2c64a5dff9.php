<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>


<?php echo $__env->first($blog->bladeViews('custom.entry-page'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title', $entry->getPageTitle($blog->getEntryPageTitleSuffix())); ?>

<?php $__env->startPush('head'); ?>
  <link rel="canonical" href="<?php echo e($blog->urlToEntry($entry)); ?>" />
  <?php echo $__env->first($blog->bladeViews('feed.metaLink'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('blog'); ?>
  <?php echo $__env->first($blog->bladeViews('entry.full', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($blog->bladeView('layouts.blog'), ['metaTags' => $blog->getDefaultMetaTags()->merge($entry)], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry.blade.php ENDPATH**/ ?>