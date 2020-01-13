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
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Name</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($todos as $todo)
									<tr >
										<td>{{$todo->name}}</td>
										<td>
											<a class='btn btn-info btn-xs' style="margin-left:5px;"
											href="{{route('todos.show', $todo)}}">
											<i class="fa fa-eye"></i>
											view
										</a>

										<a class='btn btn-info btn-xs' style="margin-left:5px;"
											href="{{route('todos.edit', $todo)}}">
											<i class="fa fa-eye"></i>
											edit
										</a>
											</td>
										</tr>
										@endforeach
									</tbody>
							</table>
		</div>
		
		
		@endsection
		