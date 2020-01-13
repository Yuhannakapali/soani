@extends('admin.layout.master') 


@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        
            <div class="row mb-2">
                <div class="justifycontent">
                    
                    <form
                        class="form-validate"
                        method="post"
                        enctype="multipart/form-data"
                        action="{{ route('ourteams.store') }}"
                    >
                        @include('admin.forms.addteam_form')
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

@endsection
