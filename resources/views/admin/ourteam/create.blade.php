@extends('admin.layout.newdashboard.master') 


@section('content')
{{-- alert block --}}
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form 
            class="form-validate"
            method="post"
            enctype="multipart/form-data"
            action="{{ route('ourteams.store') }}">
                @include('admin.forms.ourteam_form')
          </form>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection
@section('javascript')
<script>
      var msg = "{{ Session()->get('message') }}"
     var cla = "{{ Session()->get('alert-class') }}"  
     var condition = "{{ Session::has('message') }}"
  $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      if (condition) {
        console.log(msg);
        Toast.fire({
          type: cla,
          title: msg
          
        })
      }  
    });
    </script>  
@endsection