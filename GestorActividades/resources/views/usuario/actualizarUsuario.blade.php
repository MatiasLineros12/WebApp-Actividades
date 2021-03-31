@extends('layouts.app')

@section('content')
<div class="row pagename">
    <div class="sub-pagename col-md-9">
        <h1>
            Editar usuario
        </h1>
    </div>
</div>
<br>
    <div align="center" class="container">
        <div class="card col-md-10">
            <div class="card-header">
                <h3>
                    {{$usuario->name}} {{$usuario->ApellidoP}} {{$usuario->ApellidoM}}
                </h3>
                <h3>
                    <b>
                        {{$usuario->roles->nombre}}
                    </b>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{route('updateUsuario', ['usuario_id' => $usuario->id])}}" class="col-lg-12" enctype="multipart/form-data" method="post">
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
                            <label for="name">
                                Nombres
                            </label>
                            <input class="form-control" id="name" name="name" placeholder="Introduzca nombres" type="name" value="{{$usuario->name}}">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="ApellidoP">
                                Apellido paterno
                            </label>
                            <input class="form-control" id="ApellidoP" name="ApellidoP" placeholder="Introduzca apellido paterno" type="text" value="{{$usuario->ApellidoP}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="ApellidoM">
                                Apellido materno
                            </label>
                            <input class="form-control" id="ApellidoM" name="ApellidoM" placeholder="Introduzca apellido materno" type="text" value="{{$usuario->ApellidoM}}">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="nacimiento">
                                Fecha de nacimiento
                            </label>
                            <input class="form-control" id="nacimiento" name="nacimiento" placeholder="Introduzca fecha de nacimiento" type="date" value="{{$usuario->nacimiento}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="telefono">
                                Numero telefonico
                            </label>
                            <input class="form-control" id="telefono" name="telefono" placeholder="Introduzca numero telefonico" type="number" value="{{$usuario->telefono}}">
                            </input>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="email">
                                Correo electrónico
                            </label>
                            <input class="form-control" id="email" name="email" placeholder="Introduzca correo electronico" type="email" value="{{$usuario->email}}">
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div align="left" class="form-group col-md-6">
                            <label for="password">
                                Contraseña
                            </label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" id="password" name="password" placeholder="Introduzca contraseña" type="password">
                                </input>
                            </div>
                        </div>
                        <div align="left" class="form-group col-md-6">
                            <label for="password">
                                Confirme contraseña
                            </label>
                            <div class="input-group mb-2 mr-sm-2">
                                <input class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirme contraseña" type="password">
                                </input>
                            </div>
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('password_confirmation') }}
                                </strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div align="left" class="form-group col-md-12">
                        <label for="role">
                            Roles
                        </label>
                        <select class="form-control" id="role" name="role">
                            @foreach($roles as $role)
                            <option <?php="" if($role-="">
                                id == $usuario->role_id){echo("selected");} ?> 
                      value="{{$role['id']}}">{{$role->nombre}}
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
