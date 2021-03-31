@extends('layouts.app')

@section('content')
<br>
    <div align="center" class="container">
        <div class="card col-md-10">
            <div class="card-header">
                <h3>
                    ACTIVIDAD: {{$actividad->nombre}}
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('actualizarActividad', ['actividad_id' => $actividad->id])}}" class="col-lg-12" enctype="multipart/form-data" method="post">
                    {!! csrf_field() !!}
                    <!--PARA EVITAR ATAQUES-->
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>
                                {{$error}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input class="form-control" id="nombre" name="nombre" placeholder="Introduzca nombre" type="text" value="{{$actividad->nombre}}">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="fecha">
                                Fecha
                            </label>
                            <input class="form-control" id="fecha" name="fecha" placeholder="Introduzca fecha" type="date" value="{{$actividad->fecha}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="hora">
                                Hora
                            </label>
                            <input class="form-control" id="hora" name="hora" placeholder="Introduzca hora" type="time" value="{{$actividad->hora}}">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="lugar">
                                Lugar
                            </label>
                            <input class="form-control" id="lugar" name="lugar" placeholder="Introduzca lugar" type="text" value="{{$actividad->lugar}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="maximo_socios">
                                N° maximo de socios
                            </label>
                            <input class="form-control" id="maximo_socios" name="maximo_socios" placeholder="Introduzca cantidad maxima de socios" type="number" value="{{$actividad->actividadGrupal->maximo_socios}}">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="minimo_voluntarios">
                                N° minimo de voluntarios
                            </label>
                            <input class="form-control" id="minimo_voluntarios" name="minimo_voluntarios" placeholder="Introduzca cantidad minima de voluntarios" type="number" value="{{$actividad->actividadGrupal->minimo_voluntarios}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-12">
                            <label for="descripcion">
                                Descripción
                            </label>
                            <input class="form-control" id="descripcion" name="descripcion" placeholder="Introduzca descripción de actividad" type="text" value="{{$actividad->descripcion}}">
                            </input>
                        </div>
                    </div>
                    <div align="left" class="form-group col-md-12">
                        <label for="categorias">
                            Categorias
                        </label>
                        <select class="form-control" id="categorias" name="categorias">
                            @foreach($categorias as $categoria)
                            <option <?php="" if($categoria-="">
                                id == $actividad->categoria_id){echo("selected");} ?> 
                        value="{{$categoria['id']}}">{{$categoria->nombre}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success btn-lg " type="submit">
                        Modificar
                    </button>
                </form>
            </div>
        </div>
    </div>
</br>
@endsection
