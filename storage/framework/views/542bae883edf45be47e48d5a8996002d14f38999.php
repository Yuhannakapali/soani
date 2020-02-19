 <?php $__env->startSection('content'); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.newdashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>