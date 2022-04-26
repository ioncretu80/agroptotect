@extends("admin.layout.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Udobrenie</h1>
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
                    <form action="{{route('admin.udobrenie.update',$udobrenie->id)}}" method="POST" class="w-75">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="naimenovanie">Наименование</label>
                            <input type="text" class="form-control" name="naimenovanie" placeholder="Naimenovanie"
                                   value="{{sprintf("%01.2f",$udobrenie->naimenovanie)}}">
                            @error('naimenovanie')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="norma_azota">Норма Азотa</label>
                                    <input type="text" class="form-control" name="norma_azota" placeholder="Norma Azota"
                                           value="{{sprintf("%01.2f",$udobrenie->norma_azota)}}">
                                    @error('norma_azota')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="norma_fosfor">Норма Фосфор</label>
                                    <input type="text" class="form-control" name="norma_fosfor"
                                           placeholder="Norma Fosfora" value="{{sprintf("%01.2f",$udobrenie->norma_fosfor)}}">
                                    @error('norma_fosfor')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-4">
                                <div class="form-group">
                                    <label for="norma_calii">Норма Калий</label>
                                    <input type="text" class="form-control" name="norma_calii" placeholder="Norma Calia"
                                           value="{{sprintf("%01.2f",$udobrenie->norma_calii)}}">
                                    @error('norma_calii')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleSelectRounded0">Группа культур</label>
                                    <select class="custom-select rounded-0" id="grupa_kultur_id" name="grupa_kultur_id">
                                        @foreach($kulturs as $kultur)
                                            <option value="{{$kultur->id}}"   {{$kultur->id == $udobrenie->grupa_kultur_id ? "selected" : ""}}>{{$kultur->naimenovanie}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                    <div class="form-group">
                                        <label for="raion">Район</label>
                                        <input type="text" class="form-control" name="raion" placeholder="Район"
                                               value="{{$udobrenie->raion}}">
                                        @error('raion')
                                        <div class="text-danger">{{$message}}</div>
                                        @enderror
                                    </div>


                            </div>

                        </div>




                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="stoimosti">Стоимость</label>
                                    <input type="text" class="form-control" name="stoimosti" placeholder="Стоимость"
                                           value="{{sprintf("%01.2f",$udobrenie->stoimosti)}}">
                                    @error('stoimosti')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="opisanie">Описание</label>
                                    <input type="text" class="form-control" name="opisanie" placeholder="Описание"
                                           value="{{$udobrenie->opisanie}}">
                                    @error('opisanie')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="naznachenie">Назначение</label>
                                    <input type="text" class="form-control" name="naznachenie" placeholder="Назначение"
                                           value="{{$udobrenie->naznachenie}}">
                                    @error('naznachenie')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>

<div class="mb-5">
    <input type="submit" class="btn btn-primary" value="Save">

</div>

                    </form>
                </div>

            </div>



        </div><!-- /.container-fluid -->
    </section>
@endsection
