<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<ol class="blog-latest-entries-links" aria-label="<?php echo e(__($blog->transKey('titles.latest_entries'))); ?>">
  <?php $__currentLoopData = $blog->latestEntries(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li>
      <a href="<?php echo e($blog->urlToEntry($entry)); ?>" class="blog-entry-link blog-entry-title"><?php echo e($entry->getTitle()); ?></a>
    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/blog/latestEntriesLinks.blade.php ENDPATH**/ ?>