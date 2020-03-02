@extends('admin.layout.newdashboard.master')


@section('content')
{{-- main content --}}

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Message</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item active">Message</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Message</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 15%">
                            Name
                        </th>
                        <th style="width: 15%">
                            Email
                        </th>
                        <th style="width: 15%">
                            Number
                        </th>
                        <th style="width: 15%">
                            Send At 
                        </th>

                        <th>
                            Message
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($datas)) 
                    
                        @foreach ($datas as $data)
                        <tr>
                            <td>
                                {{$loop->index+1}}
                            </td>
                            <td>
                                <a>
                                    {{$data->name}}
                                </a>
                                <br />
                            </td>
                            <td>
                                {{$data->email}}
                            </td>
                            <td class="project_progress">
                                {{$data->phone}}
                            </td>
                            <td class="project_progress">
                                {{$data->created_at}} 
                            </td>

                            <td class="project-actions text-left">
                                {!! ucfirst(substr($data->message,0,100)) !!}
                                {{strlen($data->message)>100 ? '...' : ''}}
                            </td>
                        </tr>

                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
@endsection 

