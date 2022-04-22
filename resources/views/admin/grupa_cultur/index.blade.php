@extends("admin.layout.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kultur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-1 mb-3">
                    <a href="{{route('admin.grupa_kultur.create')}}" class="btn btn-block btn-primary">Add</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">

                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naimenovanie</th>
                                    <th colspan="3" class="text-center">Action</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($kulturs as $kultur)
                                <tr>
                                    <td>{{$kultur->id}}</td>
                                    <td>{{$kultur->naimenovanie}}</td>
                                    <td><a href="{{route('admin.grupa_kultur.show',$kultur->id)}}"> <i
                                                class="fas fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.grupa_kultur.edit',$kultur->id)}}"
                                           class="text-success"> <i class="fas fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.grupa_kultur.delete', $kultur->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger" role="button"></i>
                                            </button>

                                        </form>
                                    </td>

                                </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
@endsection
