<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form 
          class="form-validate"
          method="post"
          enctype="multipart/form-data"
          action="<?php echo e(route('Blog.store')); ?>">
            <?php echo $__env->make('admin.layout.newdashboard.compose', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </form>
        </div>
       
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content --><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/layout/newdashboard/inbox.blade.php ENDPATH**/ ?>