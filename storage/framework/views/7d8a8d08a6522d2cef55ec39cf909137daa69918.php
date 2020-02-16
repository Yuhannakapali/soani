 


<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="center">
        <div class="col-sm-12 px-2 ">
            <form
                class="form-validate"
                method="post"
                enctype="multipart/form-data"
                action="<?php echo e(route('Blog.store')); ?>"
            >
                <?php echo e(method_field("Post")); ?>


                <?php echo $__env->make('admin.forms.blog_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="form-group">
                    <div class=" flex box-footer">
                        <input
                            class="btn btn-primary pull-right"
                            type="submit"
                            value="Create"
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

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/blog/create.blade.php ENDPATH**/ ?>