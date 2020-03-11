<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Add Clients</h3>
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
                min="3"
                maxlength="30"
                name="name"
                placeholder="Eg: NTC" 
                value="{{$member_available ?? '' ? $member->name : old('name')}}"
              >
            </div>
            <div class="form-group">
              <label for="url">Url to clients </label>
              <input type="url" 
                class="form-control" 
                id="url" 
                name="url"
                required=""
                value="{{$member_available ?? '' ? $member->url : old('url')}}"
                placeholder="Eg: https://NTC.com">
            </div>
            <div class="form-group">
              <label for="File">File input</label>
              <input type="file" name="file" class="file" id="file">
                
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
      