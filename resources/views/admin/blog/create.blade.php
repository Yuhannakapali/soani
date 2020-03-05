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
        <div class="row ">
          <div class="col-md-9">
            <form
              class="form-validate"
              method="post" 
              action="{{route('Blog.store')}}"
            >
              @include('admin.forms.blog_form')
            </form>
          </div>
          <!-- /.col -->
            <div class="col-3">
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
                    action="{{ route('Category.store') }}"
                >
                    @include('admin.forms.category_form')
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection @section('javascript')
<script>
    var error = "{{$errors->any() == true}}"
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
