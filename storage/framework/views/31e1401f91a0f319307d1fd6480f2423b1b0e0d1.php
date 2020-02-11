<?php
/**
 * @var $blog \Bjuppa\LaravelBlog\Contracts\Blog
 * @var $entry \Bjuppa\LaravelBlog\Contracts\BlogEntry
 */
?>
<li>
    <?php echo $__env->first($blog->bladeViews('entry.short', $entry), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</li>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\vendor\bjuppa\laravel-blog\src/../resources/views/entry/listItem.blade.php ENDPATH**/ ?>