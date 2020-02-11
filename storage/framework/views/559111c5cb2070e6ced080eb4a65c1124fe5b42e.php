<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
  <?php echo $__env->yieldContent('meta', Bjuppa\MetaTagBag\MetaTagBag::make(config('blog.default_meta_tags'))->merge($metaTags ?? [])->merge(['charset' => 'utf-8'])); ?>

  <title><?php echo $__env->yieldContent('title', 'Blog'); ?></title>

  <?php echo $__env->yieldPushContent('styles'); ?>

  <?php echo $__env->yieldPushContent('head'); ?>

</head>
<body>

<?php echo $__env->yieldContent('body'); ?>

<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/vendor/blog/layouts/html.blade.php ENDPATH**/ ?>