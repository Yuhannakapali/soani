<?php
/**
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
<footer class="blog-entry-footer">
  <?php $__env->startSection('blogEntryFooter'); ?>
    <div lang="en" dir="ltr" class="blog-entry-publication-info">
      <?php if($entry->isPublic()): ?>
        Published
      <?php else: ?>
        Preview
        <?php if($entry->getPublished()->isFuture()): ?>
          scheduled for publishing
        <?php else: ?>
          created
        <?php endif; ?>
      <?php endif; ?>
      <time datetime="<?php echo e($blog->convertToBlogTimezone($entry->getPublished())->toAtomString()); ?>" itemprop="datePublished"><?php echo e($entry->getPublished()->diffForHumans()); ?></time>
      in
      <a href="<?php echo e($blog->urlToIndex()); ?>" rel="index" class="blog-title" itemprop="isPartOf" itemscope itemtype="http://schema.org/Blog"><?php echo e($blog->getTitle()); ?></a>
      by
      <?php echo $__env->first($blog->bladeViews('entry.partials.authors', $entry), ['authors' => $entry->getAuthors()->isEmpty() ? $blog->getAuthors() : $entry->getAuthors()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  <?php echo $__env->yieldSection(); ?>
</footer>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/partials/footer.blade.php ENDPATH**/ ?>