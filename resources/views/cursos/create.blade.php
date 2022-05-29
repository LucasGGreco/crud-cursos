@extends('layouts.plantilla')

@section('title' , 'Creador')

@section('content')

<h1 class="card-title text-center mt-2">Crea Cursos</h1>

<div class="row mt-2 justify-content-center">
    <div class="alert border text-black bg-white">
        <div class="col">

            <form action="{{route('cursos.store')}}" method="POST" class="row" enctype="multipart/form-data">
            @csrf
                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="name">Nombre del curso:</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name" value="{{old('name')}}">
                    @error('name')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="inicio">Fecha de inicio:</label>
                    <input type="date" class="form-control rounded-0" id="inicio" name="inicio" value="{{old('inicio')}}">
                    @error('inicio')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="fin">Culmina:</label>
                    <input type="date" class="form-control rounded-0" id="fin" name="fin" value="{{old('fin')}}">
                    @error('fin')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="costo">Costo del curso:</label>
                    <div class="input-group">
                        <div class="input-group-text">$</div>
                        <input type="number" class="form-control rounded-0" id="costo" name="costo" value="{{old('costo')}}">
                        <br>
                        @error('costo')<small>*{{$message}}</small>@enderror
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="profesor">Profesor/a:</label>
                    <input type="text" class="form-control rounded-0" id="profesor" name="profesor" value="{{old('profesor')}}">
                    @error('profesor')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="horaInicio">Las clases empiezan a las:</label>
                    <input type="time" class="form-control rounded-0" id="horaInicio" name="horaInicio" value="{{old('horaInicio')}}">
                    @error('horaInicio')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="horas">Horas por clases:</label>
                    <input type="time" class="form-control rounded-0" id="horas" name="horas" value="{{old('horas')}}">
                    @error('horas')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-12 col-md-4 col-lg-3 my-2">
                    <label for="numAlumnos">Cantidad de alumnos:</label>
                    <input type="number" class="form-control rounded-0" id="numAlumnos" name="numAlumnos" value="{{old('numAlumnos')}}">
                    @error('numAlumnos')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-md-8 col-lg-6 my-2">
                    <label for="descripcion">Denos una descripcion del curso por favor.</label>
                    <textarea name="descripcion" id="descripcion" rows="7" class="descripcion rounded-0 p-2" id="descripcion">{{old('descripcion')}}</textarea>
                    @error('descripcion')<small>*{{$message}}</small>@enderror
                </div>
            
                <div class="col-md-4 col-lg-3 my-2">
                    <label for="imagen">Imagen del curso:</label>
                    <input type="file" name="imagen" class="form-control form-control-sm rounded-0" id="imagen">
                    @error('imagen')<small>*{{$message}}</small>@enderror
                </div>

                <div class="col-md-12 col-lg-3 my-2">
                    <button type="submit" class=" btn btn-primary w-100">Crear</button>
                    <a href="{{route('cursos.index')}}" class="btn btn-secundary w-100 my-2 text-white">Volver</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
