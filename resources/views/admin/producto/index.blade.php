@extends('layouts.admin')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>PRODUCTOS</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">LISTADO DE PRODUCTOS</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title"><a href="{{url('/producto/create')}}" class="btn btn-success">Agregar</a></strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>UNIDAD</th>
                <th>PRECIO</th>
                <th>STOCK</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody>
                @foreach($productos as $cont => $producto)
                  <tr>
                    <td>{{$cont+1}}</td>
                    <td>{{$producto->id}}</td>
                    <td>{{$producto->nombre_producto}}</td>
                    <td>{{$producto->descripcion_producto}}</td>
                    <td>{{$producto->unidad_producto}}</td>
                    <td>{{$producto->precio_producto}}</td>
                    <td>{{$producto->stock_producto}}</td>
                    <td>
                        <a href="{{ url('producto/'.$producto->id.'/edit') }}" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
                    </td>
                  </tr>
                @endforeach
                @include('admin.producto.eliminar')
            </tbody>
          </table>
                </div>
            </div>
        </div>
        </div>
    </div><!-- .animated -->
</div>
<script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/js/lib/data-table/datatables-init.js')}}"></script>


<script type="text/javascript">
$(document).ready(function() {
  $('#bootstrap-data-table-export').DataTable();
} );
</script>
@endsection