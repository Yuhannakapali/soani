@extends('admin.layout.newdashboard.master') 


@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form 
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('Blog.store') }}">
                @include('admin.layout.newdashboard.compose')
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
