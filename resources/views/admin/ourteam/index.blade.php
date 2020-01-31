@extends('admin.layout.master') @section('content')

<div class="container">
    <div class="row">
        <div class="p-3" >
            <a href="{{route('ourteams.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create</a>
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
                          <th scope="col">Designation</th>
                          <th scope="col">Type of Member</th>
                          <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($ourteams))
                            @foreach ($ourteams as $ourteam)

                            <tr>
                                <th scope="row">{{$loop->index+1}}</th>
                                <td>{{$ourteam->name}}</td>
                                <td>{{$ourteam->designation}}</td>
                                <td>
                                    @if ($ourteam->board_of_director != 1) 
                                        Execcutive team
                                    @elseif ($ourteam->executive_team != 1) 
                                        Board of director
                                    @else 
                                        B.of.d/E.team
                                    @endif
                                </td>
                                <td>
                                    <a
                                        class="btn btn-info btn-xs"
                                        style="margin-left:5px;"
                                        href="{{ route('ourteams.edit', $ourteam) }}"
                                    >
                                        <i class="fa fa-eye"></i>
                                        edit
                                    </a>

                                    <form
                                    method="POST" 
                                    action="{{ route('ourteams.destroy',$ourteam)}}"
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
