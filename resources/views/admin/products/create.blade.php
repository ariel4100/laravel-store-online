@extends('layouts.appAdmin')
@section('style')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Default form contact -->
                <p class="h4 mt-4 text-center">Nuevo Producto</p>
                <form class="border border-light p-5" action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label>Nombre del producto</label>
                        <input type="text" name="name_pro" class="form-control" placeholder="Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="browser-default custom-select" name="category">
                            @foreach($allCat as $item)
                                <option value="{{$item->id_category}}" selected>{{$item->name_cat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Talles</label>
                        <select class="browser-default custom-select select2" multiple="multiple" name="size[]">
                            @foreach($allSize as $item)
                                <option value="{{$item->id_size}}" selected>{{$item->letter == null ? $item->number : $item->letter}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Colores</label>
                        <!--<select name="id_categoria[]" id="id_padre" class="form-control select2" multiple="multiple" style="width: 100%" required>-->
                        <select class="form-control select2" multiple="multiple" name="color[]">
                            @foreach($allColor as $item)
                                <option value="{{$item->id_color}}" selected>{{$item->name_color}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio</label>
                        <input type="text" name="price_pro" class="form-control mb-4" placeholder="Precio">
                    </div>
                    <div class="form-group">
                        <label>Cantidad del Producto</label>
                        <input type="text" name="quantity_pro" class="form-control mb-4" placeholder="cantidad">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">subir</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input"  name="image_pro" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">imagen-principal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload All Files From Folder</label>
                        <div class="file-loading">
                            <input id="file-1" type="file" name="galery[]" multiple="multiple" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Estado</label>
                        <select class="browser-default custom-select mb-4" name="status_pro">
                            <option  selected>ACTIVO</option>
                            <option  selected>INACTIVO</option>
                            <option  selected>PAUSA</option>
                        </select>
                    </div>
                    <button class="btn btn-info btn-block" type="submit">Send</button>
                    <a href="{{ route('productos.index') }}" class="btn btn-dark">Volver atras</a>
                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        /*$("#input-21").fileinput({
            previewFileType: "image",
            browseClass: "btn btn-success",
            browseLabel: "Pick Image",
            browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            uploadClass: "btn btn-info",
            uploadLabel: "Upload",
            uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
        });*/
        $("#file-1").fileinput({
            language: 'es',
            uploadUrl: '{{ route('productos.store') }}', // you must set a valid URL here else you will get an error
            uploadAsync: false,
            initialPreviewFileType: 'image',
            allowedFileExtensions : ['jpg', 'png','gif'],
            //overwriteInitial: false,
            maxFileSize: 1000,
            //maxFilesNum: 10,
            maxFileCount: 5,
            showUpload: false,
            fileActionSettings:{
                showUpload: false
                //showRemove: false
            },
            browseOnZoneClick: true
            //allowedFileTypes: ['image', 'video', 'flash'],
            /*slugCallback: function(filename) {
                return filename.replace('(', '_').replace(']', '_');
            }*/
        });
    </script>


@endsection