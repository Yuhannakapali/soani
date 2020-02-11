<?php
/**
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
$nextEntry = $blog->nextEntry($entry);
$previousEntry = $blog->previousEntry($entry);
?>
<?php if($nextEntry or $previousEntry): ?>
<nav class="blog-entry-nav">
  <?php $__env->startSection('blogEntryNav'); ?>
    <ul>
    <?php if($nextEntry): ?>
      <li class="blog-next-entry"><a href="<?php echo e($blog->urlToEntry($nextEntry)); ?>" rel="next" class="blog-entry-link">
        <small><?php echo e(__($blog->transKey('titles.next'))); ?><span>:</span></small>
        <span class="blog-entry-title"><?php echo e($nextEntry->getTitle()); ?></span>
      </a></li>
    <?php endif; ?>
    <?php if($previousEntry): ?>
      <li class="blog-previous-entry"><a href="<?php echo e($blog->urlToEntry($previousEntry)); ?>" rel="prev" class="blog-entry-link">
        <small><?php echo e(__($blog->transKey('titles.previous'))); ?><span>:</span></small>
        <span class="blog-entry-title"><?php echo e($previousEntry->getTitle()); ?></span>
      </a></li>
    <?php endif; ?>
    </ul>
  <?php echo $__env->yieldSection(); ?>
</nav>
<?php endif; ?>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/partials/nav.blade.php ENDPATH**/ ?>