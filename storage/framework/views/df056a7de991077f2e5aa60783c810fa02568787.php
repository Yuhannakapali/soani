<?php
/**
 * @var $author \Bjuppa\LaravelBlog\Contracts\Author
 */
?>
<li class="blog-author" itemprop="author">
  <?php if($author->getHref()): ?>
    <address><a href="<?php echo e($author->getHref()); ?>" rel="author"><?php echo e($author->getName()); ?></a></address>
  <?php else: ?>
    <?php echo e($author->getName()); ?>

  <?php endif; ?>
</li>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/author/listItem.blade.php ENDPATH**/ ?>