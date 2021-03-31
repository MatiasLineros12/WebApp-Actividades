@extends('layouts.app')
@section('content')
<div class="row pagename">
    <div class="sub-pagename col-md-9">
        <h1>
            Lista de usuarios
        </h1>
    </div>
    <div align="center" class="bttn col-md-2">
        <a class="btn btn-outline-primary btn-lg" href="{{route('crearuser')}}">
            Crear nuevo
        </a>
        <br/>
    </div>
</div>
<br>
    <div align="center" class="container col-md-10">
        <ul class="list-unstyled">
            @foreach($usuarios as $usuario)
            <div class="card col-md-9" style="padding-right: 0px; padding-left: 0px">
                <div class="card-header">
                    {{$usuario->name}} {{$usuario->ApellidoP}} {{$usuario->ApellidoM}}
                </div>
                <div align="left" class="card-body row">
                    <form class="leftForm col-md-10">
                        <fieldset disabled="">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>
                                        Correo electronico
                                    </label>
                                    <br>
                                        <input class="form-control" type="email" value="{{$usuario->email}}">
                                        </input>
                                    </br>
                                </div>
                                <div class=" form-group col-md-4">
                                    <label>
                                        Telefono
                                    </label>
                                    <br>
                                        <input class="form-control" type="email" value="{{$usuario->telefono}}">
                                        </input>
                                    </br>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>
                                        <b>
                                            Rol
                                        </b>
                                    </label>
                                    <br>
                                        <input class="form-control inputRol" type="email" value=" {{$usuario->roles->nombre}}">
                                        </input>
                                    </br>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div align="right" class="rightForm col-md-1">
                        <div class="btn-group-vertical">
                            @if(Auth::check())
                            <a class="btn btn-danger btn-lg" href="{{url('/eliminar-usuario/'.$usuario->id)}}">
                                Eliminar
                            </a>
                            <a class="btn btn-success btn-lg" href="{{url('/actualizar-usuario/'.$usuario->id)}}">
                                Actualizar
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <br>
                <br>
                    @endforeach
                </br>
            </br>
        </ul>
    </div>
    {{$usuarios->links()}}

@endsection
</br>