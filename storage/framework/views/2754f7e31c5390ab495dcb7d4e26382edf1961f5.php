<?php
/**
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<article class="blog-entry" itemprop="blogPost mainEntity" itemscope itemtype="http://schema.org/BlogPosting">
  <?php echo $__env->first($blog->bladeViews('entry.partials.header', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->first($blog->bladeViews('entry.partials.footer', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->first($blog->bladeViews('entry.partials.content', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->first($blog->bladeViews('blog.socialSharingAside', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->first($blog->bladeViews('entry.partials.nav', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->first($blog->bladeViews('entry.partials.adsAside'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <?php echo $__env->first($blog->bladeViews('entry.partials.relatedContent', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</article>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/full.blade.php ENDPATH**/ ?>