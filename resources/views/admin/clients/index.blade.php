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
</div>
{{-- main content --}}
<div class="container">
    <div class="row">
        <div class="p-3" >
            <a href="{{route('clients.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create</a>
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
                            <th scope="col">url</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($clients))
                            @foreach ($clients as $client)

                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$client->name}}</td>
                                <td>{{$client->url}}</td>
                                <td>
                                    <a
                                        class="btn btn-info btn-xs"
                                        style="margin-left:5px;"
                                        href="{{ route('clients.edit', $client) }}"
                                    >
                                        <i class="fa fa-eye"></i>
                                        edit
                                    </a>

                                    <form
                                    method="POST" 
                                    action="{{ route('clients.destroy',$client)}}"
                                    >
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>
                                    {{-- <a
                                        class=""
                                        style="margin-left:5px;"
                                        href="{{ route('ourteams.destroy', $ourteam) }}"
                                        
                                    >
                                        <i class="fa fa-eye"></i>
                                        delete
                                    </a> --}}
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
