@extends('admin.layout.master') 


@section('content')


<div class="container">
    <div class="center">
        <div class="col-sm-12 px-2 ">
            <form
                class="form-validate"
                method="post"
                enctype="multipart/form-data"
                action="{{ route('Blog.store') }}"
            >
                {{ method_field("Post") }}

                @include('admin.forms.blog_form')
                <div class="form-group">
                    <div class=" flex box-footer">
                        <input
                            class="btn btn-primary pull-right"
                            type="submit"
                            value="Create"
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
{{-- alert block --}}
{{-- <div class="container">
    <div class="row" 
        <div>
            @if(Session::has('message'))   
                <div class="alert {{ Session::get('alert-class', 'alert-info') }}"" role="alert">
                    {{ Session::get('message') }}
                  </div>
                @endif
          </div>
    </div>
</div> --}}
{{-- main content --}}





{{-- <div class="content-wrapper">
    <div class="content-header">  
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="d-flex justify-content-center">
                    <div class="center" >
                        <form
                            class="form-validate"
                            method="post"
                            enctype="multipart/form-data"
                            action="{{ route('Blog.store') }}"
                        >
                            @include('admin.forms.blog_form')
                            <div class="form-group">
                                <div class="box-footer">
                                    <input
                                        class="btn btn-primary pull-right"
                                        type="submit"
                                        value="Create"
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
        </div>
    </div>    
</div> --}}

@endsection
