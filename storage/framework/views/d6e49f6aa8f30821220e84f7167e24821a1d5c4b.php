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

<div class="container">
    <div class="row">
        <div class="p-3" >
            <a href="<?php echo e(route('testimonial.create')); ?>" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row"> 
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Designation</th>
                          <th scope="col">message</th>
                          <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($datas)): ?>
                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th scope="row"><?php echo e($loop->index+1); ?></th>
                                <td><?php echo e($data->name); ?></td>
                                <td><?php echo e($data->designation); ?></td>
                                <td><?php echo e($data->message); ?></td>
                                <td>
                                    <a
                                        class="btn btn-info btn-xs"
                                        style="margin-left:5px;"
                                        href="<?php echo e(route('testimonial.edit', $data)); ?>"
                                    >
                                        <i class="fa fa-eye"></i>
                                        edit
                                    </a>

                                    <form
                                    method="POST" 
                                    action="<?php echo e(route('testimonial.destroy',$data)); ?>"
                                    >
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?>

                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/testimonial/index.blade.php ENDPATH**/ ?>