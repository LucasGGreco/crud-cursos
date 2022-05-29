@extends('layouts.plantilla')

@section('title' , $curso->name)

@section('content')

    <div class="row my-4 border p-2 bg-white flex-column-reverse flex-lg-row">

        <div class="col-12 col-lg-4 p-0">
            <h3 class="mb-2 fw-bold text-center">Informacion:</h3>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex">
                    <i class="material-icons me-1">person</i>
                    <small class="w-100 d-flex"> Profesor/a: <strong class="ms-auto">{{$curso->profesor}}</strong> </small>
                </li>
                <li class="list-group-item d-flex">
                    <i class="material-icons me-1">calendar_today</i>
                    <small class="w-100 d-flex"> Empieza: <strong class="ms-auto">{{ date('d-m-y' , strtotime($curso->inicio)) }}</strong></small>
                    
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex">                    
                    <i class="material-icons me-1">event_available</i>
                    <small class="w-100 d-flex"> Finaliza: <strong class="ms-auto">{{ date('d-m-y' , strtotime($curso->fin)) }}</strong></small>
                </li>
                <li class="list-group-item">
                    <div class="d-flex justify-content-around ">
                        <div class="d-flex text-center">
                            <small>Inicia a las: <strong>{{$curso->horaInicio}}</strong>Hs</small>
                        </div>

                        <div class="d-flex text-center">
                            <small>Horas por clase: <strong>{{$curso->horas}}</strong></small>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="d-flex justify-content-around">
                        <div class="d-flex">
                            <i class="material-icons me-1">groups</i>
                            <small class="w-100 d-flex">Este curso consta de <strong class="mx-1">{{$curso->numAlumnos}}</strong> vacantes.</small>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <a href=" {{route('cursos.index')}} " class="btn btn-primary mt-2 mb-1 p-2 w-100">
                        ¡Inscribete! 
                        <small class="ms-1">12 /<strong class="ms-1">{{$curso->numAlumnos}}</strong></small>    
                    </a>

                    <a href=" {{route('cursos.index')}} " class="btn btn-secundary text-white p-2 w-100">
                        <span class="material-icons fs-4 px-2 align-top">arrow_back_ios</span>
                        Volver a los cursos
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-12 col-lg-8 mb-3">
            
                <div class="row g-0 ">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <img src=" {{asset('img/post/'.$curso->imagen)}} " class="img-fluid" alt="{{$curso->imagen}}">
                        </div>
                        <small class="text-muted"><a href=" {{asset('img/post/'.$curso->imagen)}} ">Ver imagen</a></small>
                        <h1 class="card-title my-2 text-center">{{$curso->name}}</h1>
                    </div>
                    <div class="col-12">
                        <div class="card-body">

                            <h4 class="card-text mb-2 fw-bold">Precio: ${{$curso->costo}}</h4>

                            <p class="card-text fst-italic">{{$curso->descripcion}}</p>



                            <div class="d-flex w-100 justify-content-end">
                                <a href=" {{route('cursos.edit' , $curso)}} " class="btn btn-outline-primary a-card a-editar">
                                    <span class="material-icons">build</span>
                                </a>
                                <form action="{{route('cursos.destroy', $curso)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger a-card a-eliminar"><span class="material-icons">delete_outline</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
