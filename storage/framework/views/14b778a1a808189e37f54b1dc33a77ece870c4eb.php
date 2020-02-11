<?php
/**
 * @var $author \Bjuppa\LaravelBlog\Contracts\Author
 */
?>
<author>
  <name><![CDATA[<?php echo e($author->getName()); ?>]]></name>
  <?php if($author->getEmail()): ?>
    <email><?php echo e($author->getEmail()); ?></email>
  <?php endif; ?>
  <?php if($author->getUrl()): ?>
    <uri><?php echo e($author->getUrl()); ?></uri>
  <?php endif; ?>
</author>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/feed/author.blade.php ENDPATH**/ ?>