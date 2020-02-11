<?php
/**
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<header class="blog-entry-header">
  <?php $__env->startSection('blogEntryHeader'); ?>
    <?php if($entry->getImage()): ?>
      <?php echo e($entry->getImage()); ?>

    <?php endif; ?>
    <h1 class="blog-entry-title" itemprop="headline"><?php echo e($entry->getTitle()); ?></h1>
  <?php echo $__env->yieldSection(); ?>
</header>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/partials/header.blade.php ENDPATH**/ ?>