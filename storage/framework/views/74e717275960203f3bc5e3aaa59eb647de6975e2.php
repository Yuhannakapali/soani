<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
'<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL
?>
<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 */
?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="<?php echo e(app()->getLocale()); ?>">
  <title><![CDATA[<?php echo e($blog->getTitle()); ?>]]></title>
  <link rel="alternate" type="text/html" href="<?php echo e($blog->urlToIndex()); ?>" />
  <?php echo $__env->renderEach($blog->bladeView('feed.author'), $blog->getAuthors(), 'author'); ?>
  <link rel="self" href="<?php echo e($blog->urlToFeed()); ?>" />
  <updated><?php echo e($blog->convertToBlogTimezone($blog->getUpdated())->toAtomString()); ?></updated>
  <id><?php echo e(url($blog->getId())); ?></id>
  <?php echo $__env->renderEach($blog->bladeView('feed.entry'), $entries, 'entry'); ?>
</feed>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/feed.blade.php ENDPATH**/ ?>