@extends("admin.layout.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Cultur</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.grupa_kultur.index')}}">Culturs</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.grupa_kultur.update',$grupaKultur->id)}}" method="POST" class="w-25"  >
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control"  name="naimenovanie" placeholder="Naimenovanie" value="{{!empty(old("naimenovanie")) ? old("naimenovanie") : $grupaKultur->naimenovanie }}">
                            @error('naimenovanie')
                            <div class="text-danger">Acest camp trebuie completat</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>

            </div>



        </div><!-- /.container-fluid -->
    </section>
@endsection
