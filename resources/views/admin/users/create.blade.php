@extends('layouts.appAdmin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Default form contact -->
                <p class="h4 mt-4 text-center">Nuevo Usuario</p>
                <form class="border border-light p-5" action="{{route('usuarios.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">subir</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="image_usu" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">imagen</label>
                        </div>
                    </div>
                    <button class="btn btn-info btn-block" type="submit">Guardar</button>
                    <a href="{{ route('usuarios.index') }}" class="btn btn-dark">Volver atras</a>
                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
@endsection