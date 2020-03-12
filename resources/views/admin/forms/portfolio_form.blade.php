<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
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
                min="3"
                maxlength="50"
                name="name"
                placeholder="Eg: NTC" 
                value="{{$member_available ?? '' ? $member->name : old('name')}}"
              >
            </div>
            <div class="form-group">
              <label for="url">Url </label>
              <input type="url" 
                class="form-control" 
                id="url" 
                name="url"
                min="3"
                maxlength="50"
                required=""
                value="{{$member_available ?? '' ? $member->url : old('url')}}"
                placeholder="Eg: https://ntc.com">
            </div>
            <div class="form-group">
              <label for="exampleInputFile"></label>
              <input type="file" name="file" class="file" id="exampleInputFile">
            </div>
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <div class="float-right"> 
              <button type="submit" class="btn btn-primary "><i class="fas fa-upload"></i> {{  Request::is('Portfolio/create') ? 'Create' : ' Update' }} </button>
            </div>
            <button type="reset"  value= "Reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
      