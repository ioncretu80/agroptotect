@extends("admin.layout.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show Udobrenie</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.grupa_kultur.index')}}">Culturs</a></li>
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div>


                <table class="table table-dark table-striped">

                    <tbody>

                    <tr>
                        <th scope="row">ID</th>
                        <td>{{$udobrenie->id}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Naimenovanie</th>
                        <td>{{$udobrenie->naimenovanie}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>





            <div class="row container-fluid"  >

                    <div style="padding: 5px">

                        <a href="{{route("admin.udobrenie.edit",$udobrenie->id)}}" class="btn btn-success">Edit</a>
                    </div>


                    <div style="padding: 5px">
                        <form action="#" method="POST">
                            @csrf
                            @method('delete')

                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>


                    <div style="padding: 5px">

                        <a href="{{route("admin.udobrenie.index")}}" class="btn btn-success">Back</a>
                    </div>




            </div>





        </div><!-- /.container-fluid -->

    </section>

@endsection
