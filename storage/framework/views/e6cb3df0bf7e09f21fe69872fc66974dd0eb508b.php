 

<?php $__env->startSection('content'); ?>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
         <form
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            action="<?php echo e(route('ourteams.update',$member)); ?>"
        >e
        <?php echo e(method_field('PATCH')); ?>


            <?php echo $__env->make('admin.forms.ourteam_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
<script>
var condition = "<?php echo e(!empty($member->type)); ?>"
var type = "<?php echo e($member->type); ?>"
if (condition) {
    document.getElementById('select').value = type;
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.newdashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/ourteam/edit.blade.php ENDPATH**/ ?>