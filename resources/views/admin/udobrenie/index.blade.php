@extends("admin.layout.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Udobrenii</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">All</li>
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
                    <a href="{{route('admin.udobrenie.create')}}" class="btn btn-block btn-primary">Add</a>
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

                                    <th>Наименование</th>
                                    <th>Норма Азот</th>
                                    <th>Норма Фосфор</th>
                                    <th>Норма Калий</th>
                                    <th>Группа культур</th>
                                    <th>Район</th>
                                    <th>Стоимость</th>
                                    <th>Описание</th>
                                    <th>Назначение</th>
                                    <th colspan="3" class="text-center">Action</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($udobrenies as $udobrenie)
                                <tr>
                                    <td>{{$udobrenie->id}}</td>
                                    <td>{{$udobrenie->naimenovanie}}</td>
                                    <td>{{$udobrenie->norma_azota}}</td>
                                    <td>{{$udobrenie->norma_fosfor}}</td>
                                    <td>{{$udobrenie->norma_calii}}</td>
                                    <td>{{$udobrenie->grupa_kultur_id}}</td>
                                    <td>{{$udobrenie->raion}}</td>
                                    <td>{{$udobrenie->stoimosti}}</td>
                                    <td>{{$udobrenie->opisanie}}</td>
                                    <td>{{$udobrenie->naznachenie}}</td>
                                    <td><a href="{{route('admin.udobrenie.show',$udobrenie->id)}}"> <i
                                                class="fas fa-eye"></i></a></td>
                                    <td><a href="{{route('admin.udobrenie.edit',$udobrenie->id)}}"
                                           class="text-success"> <i class="fas fa-pen"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.udobrenie.delete', $udobrenie->id)}}" method="POST">
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
