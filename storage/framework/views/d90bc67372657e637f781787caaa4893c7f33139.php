<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<footer>
<a href="<?php echo e($blog->urlToEntry($entry)); ?>"><?php echo e(__($blog->transKey('feed.read_more'))); ?> <?php echo e($blog->urlToEntry($entry)); ?></a>
</footer>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/feed/summaryFooter.blade.php ENDPATH**/ ?>