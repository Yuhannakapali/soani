<?php $member_available = isset($member) ? true :  false;?>
<?php echo e(csrf_field()); ?>

<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add work</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form">
          <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name"
                placeholder="Eg: NTC" 
                value="<?php echo e($member_available ?? '' ? $member->name : old('name')); ?>"
              >
            </div>
            <div class="form-group">
              <label for="url">Url </label>
              <input type="text" 
                class="form-control" 
                id="url" 
                name="url"
                required=""
                value="<?php echo e($member_available ?? '' ? $member->url : old('url')); ?>"
                placeholder="Eg: NTC.com">
            </div>
            <div class="form-group">
              <label for="exampleInputFile"></label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id=""><i class="fas fa-upload"></i></span>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <div class="float-right"> 
              <button type="submit" class="btn btn-primary "><i class="fas fa-upload"></i> create </button>
            </div>
            <button type="reset"  value= "Reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
      <?php /**PATH C:\Users\Kuro_neko\Documents\repo\soani\resources\views/admin/forms/portfolio_form.blade.php ENDPATH**/ ?>