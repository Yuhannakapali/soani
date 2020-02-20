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
            action="{{ route('clients.update',$member) }}"
        >
        {{ method_field('PATCH') }}

            @include('admin.forms.clients_form')
        </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection