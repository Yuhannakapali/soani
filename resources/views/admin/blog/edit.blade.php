@extends('admin.layout.master') @section('content')
<div class="container">
    <div class="center">
        <div class="col-sm-12 px-2 ">
            <form
                class="form-validate"
                method="post"
                enctype="multipart/form-data"
                action="{{ route('Blog.update', $member) }}"
            >
                {{ method_field("PATCH") }}

                @include('admin.forms.blog_form')
                <div class="form-group">
                    <div class="box-footer">
                        <input
                            class="btn btn-primary pull-right"
                            type="submit"
                            value="update"
                        />
                        <input
                            class="btn btn-danger pull-left"
                            type="reset"
                            value="Reset"
                        />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
