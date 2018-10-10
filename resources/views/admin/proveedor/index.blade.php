@extends('layouts.admin')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>PROVEEDORES</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">LISTADO DE PROVEEDORES</a></li>
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
                    <strong class="card-title"><a href="{{url('/proveedor/create')}}" class="btn btn-success">Agregar</a></strong>
                </div>
                <div class="card-body">
          <table id="bootstrap-data-table" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>RUC</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
                <th>EMAIL</th>
                <th>ACCIONES</th>
              </tr>
            </thead>
            <tbody>
                @foreach($proveedors as $cont => $proveedor)
                  <tr>
                    <td>{{$cont+1}}</td>
                    <td>{{$proveedor->ruc_proveedor}}</td>
                    <td>{{$proveedor->nombre_proveedor}}</td>
                    <td>{{$proveedor->direccion_proveedor}}</td>
                    <td>{{$proveedor->telefono_proveedor}}</td>
                    <td>{{$proveedor->email_proveedor}}</td>
                    <td>
                        <a href="{{ url('proveedor/'.$proveedor->id.'/edit') }}" class="btn btn-info">Editar</a>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Eliminar</button>
                    </td>
                  </tr>
                @endforeach
                @include('admin.proveedor.eliminar')
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