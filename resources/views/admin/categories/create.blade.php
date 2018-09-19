@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <!-- Default form contact -->
                <form class="text-center border border-light p-5" action="{{ route('categorias.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <p class="h4 mb-4">Nueva Categoria</p>
                    <!-- Name -->
                    <input type="text" class="form-control mb-4" name="name_cat" placeholder="Nombre de categoria">
                    <!-- Send button -->
                    <button class="btn btn-info btn-block" type="submit">Guardar</button>
                    <a href="{{ route('categorias.index') }}" class="btn btn-dark">Volver atras</a>
                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
@endsection