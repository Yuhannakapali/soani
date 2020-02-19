@extends('admin.layout.newdashboard.master') @section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12  ">
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

@endsection
