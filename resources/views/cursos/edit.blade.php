@extends('layouts.plantilla')

@section('title' , 'Editar')

@section('content')

    <h1 class="card-title text-center mt-2">Edite su curso</h1>
    
    <div class="row mt-2 justify-content-center">
        <div class="alert border text-black bg-white">
            <div class="col">
    
                <form action=" {{route('cursos.update' , $curso)}}" method="POST" class="row" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="name">Nombre del curso:</label>
                        <input type="text" class="form-control rounded-0" id="name" name="name" value="{{old('name' , $curso->name)}}">
                        @error('name')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="inicio">Fecha de inicio:</label>
                        <input type="date" class="form-control rounded-0" id="inicio" name="inicio" value="{{old('inicio' , $curso->inicio)}}">
                        @error('inicio')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="fin">Culmina:</label>
                        <input type="date" class="form-control rounded-0" id="fin" name="fin" value="{{old('fin' , $curso->fin)}}">
                        @error('fin')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="costo">Costo del curso:</label>
                        <div class="input-group">
                            <div class="input-group-text">$</div>
                            <input type="number" class="form-control rounded-0" id="costo" name="costo" value="{{old('costo' , $curso->costo)}}">
                            <br>
                            @error('costo')<small>*{{$message}}</small>@enderror
                        </div>
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="profesor">Profesor/a:</label>
                        <input type="text" class="form-control rounded-0" id="profesor" name="profesor" value="{{old('profesor' , $curso->profesor)}}">
                        @error('profesor')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="horaInicio">Las clases empiezan a las:</label>
                        <input type="time" class="form-control rounded-0" id="horaInicio" name="horaInicio" value="{{old('horaInicio' , $curso->horaInicio)}}">
                        @error('horaInicio')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="horas">Horas por clases:</label>
                        <input type="time" class="form-control rounded-0" id="horas" name="horas" value="{{old('horas' , $curso->horas)}}">
                        @error('horas')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <label for="numAlumnos">Cantidad de alumnos:</label>
                        <input type="number" class="form-control rounded-0" id="numAlumnos" name="numAlumnos" value="{{old('numAlumnos' , $curso->numAlumnos)}}">
                        @error('numAlumnos')<small>*{{$message}}</small>@enderror
                    </div>
    
                    <div class="col-md-8 col-lg-6 my-2">
                        <label for="descripcion">Denos una descripcion del curso por favor.</label>
                        <textarea name="descripcion" id="descripcion" rows="7" class="descripcion rounded-0 p-2" id="descripcion">{{old('descripcion' , $curso->descripcion)}}</textarea>
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
    
    
    
        {{-- <div class="row justify-content-center">
            <div class="col-6">
                <form action=" {{route('cursos.update' , $curso)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name" class="form-label w-100 text-center">
                            Nombre:
                            <input value="{{old('name' , $curso->name)}}" type="text" name="name" class="form-control" id="name" aria-describedby="name">
                        </label>
                        @error('name')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                        <input type="hidden" name="slug" value="slug">
                    </div>
    
                    <div class="mb-3">
                        <label for="descripcion" class="form-label w-100 text-center">
                            Descripcion:
                            <textarea name="descripcion" id="descripcion" rows="3" class="form-control" id="descripcion"> {{old('descripcion' , $curso->descripcion)}} </textarea>
                        </label>
                        @error('descripcion')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
    
                    <div class="mb-3">
                        <label for="categoria" class="form-label w-100 text-center">
                            Categoria:
                            <input value="{{old('categoria' , $curso->categoria)}}" type="text" name="categoria" class="form-control" id="categoria" aria-describedby="categoria">
                        </label>
                        @error('categoria')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class=" btn btn-primary w-50">Guardar</button>
    
                    </div>
                </form>
            </div>
        </div> --}}
    
    
    
    
        @endsection

    








