<?php $__env->startSection('blogRelatedContent'); ?>
  <aside class="blog-latest-entries">
    <header aria-hidden="true">
      <small><?php echo e(__($blog->transKey('titles.latest_entries'))); ?></small>
    </header>
    <?php echo $__env->first($blog->bladeViews('blog.latestEntriesLinks'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="blog-feed-subscriptions">
      <?php echo $__env->first($blog->bladeViews('feed.subscriptionLink'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </aside>
<?php echo $__env->yieldSection(); ?>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/partials/relatedContent.blade.php ENDPATH**/ ?>