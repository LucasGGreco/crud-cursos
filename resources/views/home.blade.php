@extends('layouts.plantilla')

@section('title' , 'Home')

@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-auto">
            <h1 class="text center d-inline">Bienvenidos al CRUD de </h1><h1 class=" d-inline card-title"><strong>Lucas Gabriel Greco </strong></h1>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <div class="alert alert-warning mt-4 text-black" role="alert">
                <p>Acá se prodrá interactuar con un CRUD. (Create-Read-Update-Delete) donde se podra interactuar con las funciones básicas en bases de datos.</p>
                
                <hr>
        
                <p>Utilizando el lenguaje PHP junto a su framework Laravel v8.X</p>
            
                <hr>
        
                <p>Diseñado mediante la biblioteca BOOTSTRAP.</p>
            
                <hr>
        
                <p>La web es un simulador de cursos online, desplegado en Heroku mediante gitlab.</p>
            
                <div class="d-flex w-100">
                    <a href="{{route('cursos.index')}}" class="btn btn-outline-dark ms-auto">Ir a CURSOS</a>
                </div>
            </div>
        </div>
    </div>
    

@endsection
