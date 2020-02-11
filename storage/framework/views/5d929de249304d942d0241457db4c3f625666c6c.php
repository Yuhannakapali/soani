<?php
/**
 * @var $authors \Illuminate\Support\Collection
 * @var $author \Bjuppa\LaravelBlog\Contracts\Author
 */
?>
<ul class="blog-author-list" aria-label="<?php echo e(__($blog->transKey('titles.authors'))); ?>">
  <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->first($blog->bladeViews('author.listItem'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/entry/partials/authors.blade.php ENDPATH**/ ?>