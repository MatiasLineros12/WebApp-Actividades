@extends('layouts.app')

@section('content')
<br>
    <div align="center" class="container">
        <div class="card col-md-10">
            <div class="card-header">
                <h3>
                    CREAR ACTIVIDAD
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('guardarActividadGrupal')}}" class="col-lg-12" enctype="multipart/form-data" method="post">
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
                            <input class="form-control" id="nombre" name="nombre" placeholder="Introduzca nombre" type="text">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="fecha">
                                Fecha
                            </label>
                            <input class="form-control" id="fecha" name="fecha" placeholder="Introduzca fecha" type="date">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="hora">
                                Hora
                            </label>
                            <input class="form-control" id="hora" max="12:59" min="00:00" name="hora" placeholder="Introduzca hora" type="time">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="lugar">
                                Lugar
                            </label>
                            <input class="form-control" id="lugar" name="lugar" placeholder="Introduzca lugar" type="text">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="maximo_socios">
                                N° maximo de socios
                            </label>
                            <input class="form-control" id="maximo_socios" name="maximo_socios" placeholder="Introduzca cantidad maxima de socios" type="number">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="minimo_voluntarios">
                                N° minimo de voluntarios
                            </label>
                            <input class="form-control" id="minimo_voluntarios" name="minimo_voluntarios" placeholder="Introduzca cantidad minima de voluntarios" type="number">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-12">
                            <label for="descripcion">
                                Descripción
                            </label>
                            <input class="form-control" id="descripcion" name="descripcion" placeholder="Introduzca descripción de actividad" type="text">
                            </input>
                        </div>
                    </div>
                    <div align="left" class="form-group col-md-12">
                        <label for="categorias">
                            Categorias
                        </label>
                        <select class="form-control" id="categorias" name="categorias">
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria['id']}}">
                                {{$categoria->nombre}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-success btn-lg " type="submit">
                        Crear
                    </button>
                </form>
            </div>
        </div>
    </div>
</br>
@endsection
