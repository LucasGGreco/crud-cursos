@extends('layouts.plantilla')

@section('title' , 'Home')

@section('content')

<h1 class="card-title text-center mt-2">Aqui vera todos los cursos</h1>

<div class="row mt-2 justify-content-center">
    <div class="col-12 text-center">
        <div class="alert border text-black bg-white" role="alert">
            <h4>Seleccione que curso desea ver</h4>
            <p class="my-2">Puede volver a modificar su contenido si lo desea, eliminarlo o bien</p>
            <a href=" {{route('cursos.create')}} " class="btn btn-primary">Crear nuevo curso</a>
        </div>
    </div>
</div>
 
     
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
            @foreach ($cursos as $curso)
                <div class="col">
                    
                    <div class="card p-2 border-0">
                        <span class="precio px-3 py-2 border border-dark text-white">${{$curso->costo}}</span>
                        <img class="card-img-top img-fluid img-curso" src=" {{asset('img/post/'.$curso->imagen)}} " alt="{{$curso->imagen}}">
                        <div class="card-body card-body-index ">
                            <h5 class="card-title">{{$curso->name}}</h5>
                            <p class="card-text">{{$curso->descripcion}}</p>
                        </div>
            
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item item-fecha">
                                <p class="card-text text-white">Inicia: {{ date('d-m-y' , strtotime($curso->inicio)) }}</p>
                            </li>
                        </ul>
            
                        <div class="d-flex align-items-end d-flex align-items-center bg-white">
                            <a href="{{route('cursos.show' , $curso)}}" class="btn btn-primary a-card w-100 m-1">
                                Ver curso
                            </a>
                        </div>
            
                    </div>

                </div>
            @endforeach
        </div>

        <div class="text-center">
            <div class="row justify-content-center">
                <div class="col-auto my-2">
                    {{$cursos->links()}}
                </div>
            </div>
        </div>

        
   

@endsection
