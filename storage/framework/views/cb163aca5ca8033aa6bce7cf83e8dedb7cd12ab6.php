 


<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row" 
        <div>
            <?php if(Session::has('message')): ?>   
                <div class="alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"" role="alert">
                    <?php echo e(Session::get('message')); ?>

                  </div>
                <?php endif; ?>
          </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-header">  
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="d-flex justify-content-center">
                    <div class="center" >
                        <form
                            class="form-validate"
                            method="post"
                            enctype="multipart/form-data"
                            action="<?php echo e(route('clients.store')); ?>"
                        >
                            <?php echo $__env->make('admin.forms.clients_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="form-group">
                                <div class="box-footer">
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
        </div>
    </div>    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/clients/create.blade.php ENDPATH**/ ?>