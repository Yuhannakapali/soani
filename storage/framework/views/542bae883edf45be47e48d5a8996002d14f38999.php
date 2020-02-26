 <?php $__env->startSection('content'); ?>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Blog</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12  ">
                <form
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    action="<?php echo e(route('Blog.update', $member)); ?>"
                >
                    <?php echo e(method_field("PATCH")); ?>

    
                    <?php echo $__env->make('admin.forms.blog_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    
                </form>
            </div>
        </div>
    </div>     
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.newdashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>