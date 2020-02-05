<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>dashboard</title>
  <?php echo $__env->make('admin.layout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <?php echo $__env->make('admin.layout.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <div class="content-wrapper">
    <div class="content-header"> 
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>    
  
 <?php echo $__env->make('admin.layout.controlsidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('admin.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php if(session('message')): ?>
<span class="alert alert-success"><?php echo e(session('message')); ?></span>
<?php endif; ?>
<?php echo $__env->make('admin.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/layout/master.blade.php ENDPATH**/ ?>