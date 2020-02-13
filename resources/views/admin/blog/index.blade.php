@extends('admin.layout.master') @section('content')

{{-- alert block --}}

<div class="container">
    <div class="row" 
        <div>
            @if(Session::has('message'))   
                <div class="alert {{ Session::get('alert-class', 'alert-info') }}"" role="alert">
                    {{ Session::get('message') }}
                  </div>
                @endif
          </div>
    </div>
{{-- main content --}}

        <div class="p-3" >
            <a href="{{route('Blog.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create</a>
        </div>
   
<div class="container">
    <div class="row"> 
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title </th>
                            <th scope="col">Author</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($blogs))
                            @foreach ($blogs as $blog)

                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->Author}}</td>
                                <td>
                                    <a
                                        class="btn btn-info btn-xs"
                                        style="margin-left:5px;"
                                        href="{{ route('Blog.edit', $blog) }}"
                                    >
                                        <i class="fa fa-eye"></i>
                                        edit
                                    </a>

                                    <form
                                    method="POST" 
                                    action="{{ route('Blog.destroy',$blog)}}"
                                    >
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
    </div>
</div>

@endsection
