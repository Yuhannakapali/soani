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
            <div class="col-sm-12  ">
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