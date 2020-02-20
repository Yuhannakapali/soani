<!-- /.col -->
<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Compose New Blog</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="form-group">
          <input
           class="form-control"
           placeholder="Enter title"
           id="title"
           name="title"
           required=""
           value="{{$member_available ?? '' ? $member->title : old('title')}}"
          >
        </div>
        <div class="form-group">
            <textarea 
             id="body"
            name="body"
            class="form-control"
            style="height: 300px"
            >
              {{$member_available ?? '' ? $member->body : old('body')}}
              
            </textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Choose Title Image </label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id=""><i class="fas fa-upload"></i></span>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <div class="float-right">
          <button type="button" class="btn btn-default"><i class="fas fa-pencil-alt"></i> Draft</button>
          <button type="submit" class="btn btn-primary "><i class="far fa-envelope"></i> Publish</button>
        </div>
        <button type="reset"  value= "Reset" class="btn btn-default"><i class="fas fa-times"></i> Discard</button>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  
