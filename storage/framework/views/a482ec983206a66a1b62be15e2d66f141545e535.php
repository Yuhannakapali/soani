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


        <div class="p-3" >
            <a href="<?php echo e(route('Blog.create')); ?>" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create</a>
        </div>
   
<div class="container">
    <div class="row"> 
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title </th>
                            <th scope="col">Author</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($blogs)): ?>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <th scope="row"><?php echo e($loop->index+1); ?></th>
                                <td><?php echo e($blog->title); ?></td>
                                <td><?php echo e($blog->Author); ?></td>
                                <td>
                                    <a
                                        class="btn btn-info btn-xs"
                                        style="margin-left:5px;"
                                        href="<?php echo e(route('Blog.edit', $blog)); ?>"
                                    >
                                        <i class="fa fa-eye"></i>
                                        edit
                                    </a>

                                    <form
                                    method="POST" 
                                    action="<?php echo e(route('Blog.destroy',$blog)); ?>"
                                    >
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?>

                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>