@extends('layouts.appAdmin2')
@section('style')

@endsection
@section('content')
    <section class="content-header">
        <h1>
            Nuevo Producto
            <small>preview of simple tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Productos</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <form role="form" action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group col-md-4">
                                <label>Nombre del producto</label>
                                <input type="text" name="name_pro" class="form-control" placeholder="Nombre del producto">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Categoria</label>
                                <select class="form-control" name="category">
                                    @foreach($allCat as $item)
                                        <option value="{{$item->id_category}}" selected>{{$item->name_cat}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Precio</label>
                                <input type="text" name="price_pro" class="form-control mb-4" placeholder="Precio">
                            </div>
                            <div class="form-group col-md-4">
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
                            <div class="form-group col-md-4">
                                <label>Upload All Files From Folder</label>
                                <div class="file-loading">
                                    <input id="file-1" type="file" name="galery[]" multiple="multiple" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="form-control" name="status_pro">
                                    <option  selected>ACTIVO</option>
                                    <option  selected>INACTIVO</option>
                                    <option  selected>PAUSA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                @method('POST')
                @csrf
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Talles</label>
                                <select class="form-control select2" multiple="multiple" name="size[]">
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
                            <p>Si quiere agregar nuevos Talles y Colores haga click!!!! </p>
                            <a href="{{ route('size') }}" class="btn btn-info">Talles</a>
                            <a href="{{ route('color') }}" class="btn btn-info">Color</a>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info btn-block" type="submit">Guardar</button>
                <a href="{{ route('productos.index') }}" class="btn btn-default btn-block">Volver atras</a>
            </form>
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script')
    <script>
        $(".select2").select2();
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