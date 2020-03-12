@extends('admin.layout.newdashboard.master') @section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Edit Blog</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-9  ">
              @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
              @endif
                <form
                    class="form-validate"
                    method="post"
                    enctype="multipart/form-data"
                    action="{{ route('Blog.update', $member) }}"
                >
                    {{ method_field("PATCH") }}
    
                    @include('admin.forms.blog_form')
                    
                </form>
            </div>
            <div class="col-3">
              <form
                  class="form-validate"
                  method="post"
                  action="{{ route('Category.store') }}"
              >
                  @include('admin.forms.category_form')
              </form>
          </div>
          
          <div class="row">
              <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Category List </h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          
                          <th style="width: 70%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            @foreach ($categories as $category)
                           
                            <tr>
                                <td>
                                    {{$loop->index+1}}
                                </td>
                                <td >
                                    {{$category->name}}
                                </td>    
                                
                                <td class="project-actions text-right" style="width: 70%">
                                  
                                  {{-- <a
                                        class="btn btn-info btn-sm"
                                        href="{{ route('Blog.edit', $category) }}"
                                    >
                                        <i class="fas fa-pencil-alt"> </i>
                                        Edit
                                    </a> --}}
        
                                    <a class="btn btn-sm" onclick="return confirm('Are you sure?')">
                                        <form
                                            method="POST"
                                            action="{{ route('Category.destroy', $category) }}"
                                        >
                                            {{ csrf_field() }}
                                            {{ method_field("DELETE") }}
                                            <button
                                                type="submit"
                                                class="btn btn-danger btn-sm"
                                            >
                                                <i class="fas fa-trash"> </i> delete
                                            </button>
                                        </form>
                                    </a>
                                </td>
                            </tr>
        
                            @endforeach  
                          
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
          </div>
        </div>
    </div>     
</section>
@endsection

@section('javascript')
<script>
var condition = "{{!empty($member->category->name)}}"
var type = "{{$member->category->id}}"
window.onload = function(){
  if (condition) {
    document.getElementById('select').value = type;
}
}

</script>
@endsection