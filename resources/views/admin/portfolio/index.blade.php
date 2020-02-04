@extends('admin.layout.master') @section('content')
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
</div>
<div class="container">
    <div class="row">
        <div class="p-3" >
            <a href="{{route('portfolio.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="row"> 
            <div class="col-lg-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Url</th>
                          
                          <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($datas))
                            @foreach ($datas as $data)

                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$data->name}}</td>
                                <td>{{$data->url}}</td>
                                <td>
                                    <a
                                        class="btn btn-info btn-xs"
                                        style="margin-left:5px;"
                                        href="{{ route('portfolio.edit', $data) }}"
                                    >
                                        <i class="fa fa-eye"></i>
                                        edit
                                    </a>

                                    <form
                                    method="POST" 
                                    action="{{ route('portfolio.destroy',$data)}}"
                                    >
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
    </div>
</div>

@endsection
