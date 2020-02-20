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
            action="{{ route('Portfolio.update',$member) }}"
        >
        {{ method_field('PATCH') }}

            @include('admin.forms.portfolio_form')
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
var condition = "{{!empty($member->type)}}"
var type = "{{$member->type}}"
if (condition) {
    document.getElementById('select').value = type;
}
</script>
@endsection