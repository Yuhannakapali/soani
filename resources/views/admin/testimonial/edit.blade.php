@extends('admin.layout.master') 


@section('content')
@if(Session()->has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="content-wrapper">
    <div class="content-header">  
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="d-flex justify-content-center">
                    
                    
                    <div class="center" >
                        <form
                            class="form-validate"
                            method="post"
                            enctype="multipart/form-data"
                            action="{{ route('Testimonial.update',$member) }}"
                        >
                        {{ method_field('PATCH') }}

                            @include('admin.forms.testimonial_form')
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
        </div>
    </div>    
</div>

@endsection