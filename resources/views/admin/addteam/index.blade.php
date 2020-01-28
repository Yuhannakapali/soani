@extends('admin.layout.master') 


@section('content')
<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Designation</th>
                <th scope="col"> Board Member</th>

              </tr>
            </thead>
            <tbody>
        @if (!empty($ourteams))
            @foreach ($ourteams as $ourteam)
            
                  <tr>
                  <th scope="row">{{$ourteam->id}}</th>
                    <td>{{$ourteam->name}}</td>
                    <td>{{$ourteam->designation}}</td>
                    <td>@if ($ourteam-> Board_of_director == 1)
                             Board of director    
                        @else
                            executive team  
                    @endif</td>
                    </tr>               
            @endforeach
        @endif
    </tbody>
</table>
    </div>
</div>

@endsection