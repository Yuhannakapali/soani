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
                min="3"
                maxlength="50"
                required=""
                value="{{$member_available ?? '' ? $member->title : old('title')}}"
            />
        </div>

        <div class="form-group">
            <textarea id="body" name="body" class="form-control">
                   
            {{$member_available ?? '' ? $member->body : old('body')}}
            </textarea>
        </div>
        <div class="form-group">
            <label for="file">Title Images</label>
            <input id="file" class="file" name="file" type="file" accept="image/*">
          </div>
        <div class="form-group">
          <label for="inputStatus">category</label>
          <select id="select" name= "category" class="form-control custom-select">
            <option  disabled>select one</option>
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
              <i class="fas fa-plus"></i> {{  Request::is('Blog/create') ? 'Create' : ' Update' }}
            </button>
        </div>
        <button type="reset" class="btn btn-default">
            <i class="fas fa-times"></i> Discard
        </button>
    </div>
    <!-- /.card-footer -->
</div>
<!-- /.card -->
