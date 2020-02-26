@extends('admin.layout.newdashboard.master') @section('content')
{{-- main content --}}
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Compose Blog</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section>
    <div class="btn-holder">
        <div class="float-right">
            <a href="{{ route('Blog.create') }}"
                ><button type="submit" class="btn btn-primary ">
                    <i class="fa fa-plus"></i> Create
                </button></a
            >
        </div>
    </div>
</section>
<section class="content">
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Projects</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Title
                        </th>
                        <th style="width: 30%">
                            Published at
                        </th>
                        <th>
                            Written by
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%"></th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($blogs)) @foreach ($blogs as $blog)
                    <tr>
                        <td>
                            {{$loop->index+1}}
                        </td>
                        <td>
                            <a>
                                {{$blog->title}}
                            </a>
                            <br />
                        </td>
                        <td>
                            <small> Created at {{$blog->created_at}} </small>
                        </td>
                        <td class="project_progress">
                            {{$blog->Author}}
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">published</span>
                        </td>
                        <td class="project-actions text-right">
                            <a
                                class="btn btn-primary btn-sm"
                                href="{{ route('Blog.show', $blog) }}"
                            >
                                <i class="fas fa-folder"> </i>
                                View
                            </a>
                            <a
                                class="btn btn-info btn-sm"
                                href="{{ route('Blog.edit', $blog) }}"
                            >
                                <i class="fas fa-pencil-alt"> </i>
                                Edit
                            </a>

                            <a class="btn btn-sm">
                                <form
                                    method="POST"
                                    action="{{ route('Blog.destroy', $blog) }}"
                                >
                                    {{ csrf_field() }}
                                    {{ method_field("DELETE") }}
                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                    >
                                        <i class="fas fa-trash"> </i> delete
                                    </button>
                                </form>
                            </a>
                        </td>
                    </tr>

                    @endforeach @endif
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</section>
@endsection @section('javascript')
<script>
    var msg = "{{ Session()->get('message') }}";
    var cla = "{{ Session()->get('alert-class') }}";
    var condition = "{{ Session::has('message') }}";
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000
        });
        if (condition) {
            console.log(msg);
            Toast.fire({
                type: cla,
                title: msg
            });
        }
    });
</script>
@endsection
