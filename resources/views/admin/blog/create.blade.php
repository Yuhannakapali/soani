@extends('admin.layout.newdashboard.master') @section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blog</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row ">
          <div class="col-md-9">
            <form
              class="form-validate"
              method="post" 
              enctype="multipart/form-data"
              action="{{route('Blog.store')}}"
            >
              @include('admin.forms.blog_form')
            </form>
          </div>
          <!-- /.col -->
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
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection @section('javascript')
<script>
    var msg = "{{ Session()->get('message') }}";
    var cla = "{{ Session()->get('alert-class') }}";
    var condition = "{{ Session::has('message') }}";
    
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000
        });
        if (condition) {
            Toast.fire({
                type: cla,
                title: msg
            });
        }
        
    });

    

</script>
@endsection
