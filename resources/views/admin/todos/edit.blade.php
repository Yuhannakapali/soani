@extends('admin.layout.main')
		

		@section('content')
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Todo Table
				</h1>
			</section>
		 <section class="content-header">
				<a href="{{route('todos.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i>Create</a>
				

			</section>
		<!-- Main content -->
                
        
        <form class="form-validate" method="post" enctype="multipart/form-data"
        action="{{route('todos.update','todo')}}">
        @include('admin.forms.todo_form')
        <div class="form-group">
            <div class="box-footer">
                <input class="btn btn-primary pull-right" type="submit" value="Create">
                <input class="btn btn-danger pull-left" type="reset" value="Reset">
            </div>
        </div>
    </form>
            
		</div>
		
		
		@endsection
		