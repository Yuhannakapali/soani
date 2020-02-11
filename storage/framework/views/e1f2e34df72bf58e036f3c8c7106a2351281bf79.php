<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<entry>
  <title><![CDATA[<?php echo e($entry->getTitle()); ?>]]></title>
  <link rel="alternate" href="<?php echo e($blog->urlToEntry($entry)); ?>"/>
  <id><?php echo e(url($blog->getId(), $entry->getId())); ?></id>
  <?php echo $__env->renderEach($blog->bladeView('feed.author'), $entry->getAuthors(), 'author'); ?>
  <summary type="html">
    <![CDATA[<?php echo e($entry->getSummary()); ?>]]>
    <![CDATA[<?php echo $__env->make($blog->bladeView('feed.summaryFooter'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>]]>
  </summary>
  <?php if($blog->displayFullEntryInFeed($entry)): ?>
  <content type="html">
    <![CDATA[<?php echo e($entry->getContent()); ?>]]>
  </content>
  <?php endif; ?>
  <published><?php echo e($blog->convertToBlogTimezone($entry->getPublished())->toAtomString()); ?></published>
  <updated><?php echo e($blog->convertToBlogTimezone($entry->getUpdated())->toAtomString()); ?></updated>
</entry>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/feed/entry.blade.php ENDPATH**/ ?>