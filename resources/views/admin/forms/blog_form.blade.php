<?php $member_available = isset($member) ? true :  false;?>
{{ csrf_field() }}

<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">Compose New</h3>
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
            />
        </div>

        <div class="form-group">
            <textarea id="body" name="body" class="form-control">
                   
         {{$member_available ?? '' ? $member->body : old('body')}}
       </textarea
            >
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
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
        <div class="form-group">
          <label for="inputStatus">category</label>
          <select name= "category" class="form-control custom-select">
            <option selected disabled>Select one</option>
            @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>    
            @endforeach
            
            
          </select>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <div class="float-right">
            <button type="button" class="btn btn-default">
                <i class="fas fa-pencil-alt"></i> Draft
            </button>
            <button type="submit" class="btn btn-primary">
                <i class="far fa-envelope"></i> Send
            </button>
        </div>
        <button type="reset" class="btn btn-default">
            <i class="fas fa-times"></i> Discard
        </button>
    </div>
    <!-- /.card-footer -->
</div>
<!-- /.card -->
