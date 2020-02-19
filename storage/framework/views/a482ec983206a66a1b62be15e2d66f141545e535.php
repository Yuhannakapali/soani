 <?php $__env->startSection('content'); ?>

        
        <div class="btn-holder">
            <div class="float-right">
            <a href="<?php echo e(route('Blog.create')); ?>"><button type="submit" class="btn btn-primary "><i class="fa fa-plus"></i> Create </button></a>
            </div>    
        </div>

        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Projects</h3>
    
              
            </div>
            <div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                      <tr>
                          <th style="width: 1%">
                              #
                          </th>
                          <th style="width: 20%">
                              Title
                          </th>
                          <th style="width: 30%">
                              published at 
                          </th>
                          <th>
                              Written by 
                          </th>
                          <th style="width: 8%" class="text-center">
                              Status
                          </th>
                          <th style="width: 20%">
                            
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php if(!empty($blogs)): ?>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td>
                            <?php echo e($loop->index+1); ?>

                          </td>
                          <td>
                              <a >
                                 <?php echo e($blog->title); ?> 
                              </a>
                              <br/>
                             
                          </td>
                          <td>
                            <small>
                              Created at <?php echo e($blog->created_at); ?>

                          </small>
                          </td>
                          <td class="project_progress">
                              <?php echo e($blog->Author); ?>

                          </td>
                          <td class="project-state">
                              <span class="badge badge-success">published</span>
                          </td>
                          <td class="project-actions text-right">
                              <a class="btn btn-primary btn-sm" href="<?php echo e(route('Blog.show',$blog)); ?>">
                                  <i class="fas fa-folder">
                                  </i>
                                  View
                              </a>
                            <a class="btn btn-info btn-sm" href="<?php echo e(route('Blog.edit',$blog)); ?>">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Edit
                              </a>

                              
                            <a class="btn btn-sm" >
                                      
                              
                               
                                  <form
                                    method="POST" 
                                    action="<?php echo e(route('Blog.destroy',$blog)); ?>"
                                    >
                                        <?php echo e(csrf_field()); ?>

                                        <?php echo e(method_field('DELETE')); ?>

                                        <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash">   </i> delete</button>
                                    </form>
                                  
                              </a>
                          </td>
                      </tr>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                      <?php endif; ?>
                      
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    
        </section>     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
<script>
      var msg = "<?php echo e(Session()->get('message')); ?>"
     var cla = "<?php echo e(Session()->get('alert-class')); ?>"  
     var condition = "<?php echo e(Session::has('message')); ?>"
  $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      if (condition) {
        console.log(msg);
        Toast.fire({
          type: cla,
          title: msg
          
        })
      }  
    });
    </script>  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.newdashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/blog/index.blade.php ENDPATH**/ ?>