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
            action="{{ route('testimonial.update',$member) }}"
        >
        {{ method_field('PATCH') }}

            @include('admin.forms.testimonial_form')
        </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection