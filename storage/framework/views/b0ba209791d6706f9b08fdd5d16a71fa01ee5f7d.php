<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<article class="blog-entry-short" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" <?php echo $__env->renderWhen($entry->getImageUrl(), $blog->bladeView('entry.partials.imageStyle'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>>
  <header class="blog-entry-header">
    <h2 class="blog-entry-title" itemprop="headline"><a href="<?php echo e($blog->urlToEntry($entry)); ?>" class="blog-entry-link" itemprop="url"><?php echo e($entry->getTitle()); ?></a></h2>
  </header>
  <div class="blog-entry-summary">
    <?php echo e($entry->getSummary()); ?>

  </div>
  <footer class="blog-entry-footer">
    <small><time datetime="<?php echo e($blog->convertToBlogTimezone($entry->getPublished())->toAtomString()); ?>" lang="en" dir="ltr" itemprop="datePublished"><?php echo e($entry->getPublished()->diffForHumans()); ?></time></small>
    <a href="<?php echo e($blog->urlToEntry($entry)); ?>" class="blog-read-more-link">
      <small><?php echo e(__($blog->transKey('titles.read_entry'))); ?><span>:</span></small>
      <small><?php echo e($entry->getTitle()); ?></small>
    </a>
  </footer>
</article>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/short.blade.php ENDPATH**/ ?>