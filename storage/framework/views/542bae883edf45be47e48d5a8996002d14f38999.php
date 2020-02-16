 <?php $__env->startSection('content'); ?>
<div class="container">
    <div class="center">
        <div class="col-sm-12 px-2 ">
            <form
                class="form-validate"
                method="post"
                enctype="multipart/form-data"
                action="<?php echo e(route('Blog.update', $member)); ?>"
            >
                <?php echo e(method_field("PATCH")); ?>


                <?php echo $__env->make('admin.forms.blog_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="form-group">
                    <div class="box-footer">
                        <input
                            class="btn btn-primary pull-right"
                            type="submit"
                            value="update"
                        />
                        <input
                            class="btn btn-danger pull-left"
                            type="reset"
                            value="Reset"
                        />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/blog/edit.blade.php ENDPATH**/ ?>