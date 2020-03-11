<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add category</h3>
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
                min="3"
                max="20"
                required
                placeholder="Eg: Entertainment" 
              >
            </div>
            
            

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
      