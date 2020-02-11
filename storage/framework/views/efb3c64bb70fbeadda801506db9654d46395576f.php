<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
<small><a aria-label="<?php echo e(__($blog->transKey('feed.atom_subscribe'), ['blog' => $blog->getTitle()])); ?>"
    href="<?php echo e($blog->urlToFeed()); ?>" type="application/atom+xml" rel="alternate">
    <?php echo e(__($blog->transKey('feed.subscribe'))); ?>

  </a></small>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/feed/subscriptionLink.blade.php ENDPATH**/ ?>