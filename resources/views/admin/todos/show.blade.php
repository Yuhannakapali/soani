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
                
        
            {{$todo->name}}
            
		</div>
		
		
		@endsection
		