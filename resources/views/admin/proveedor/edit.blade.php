@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Proveedor</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center">Editar Proveedor</h3>
                          </div>
                          <hr>
                          {!! Form::model($proveedor,['method'=>'PATCH','url'=>['proveedor',$proveedor->id],'files'=>'true']) !!}
                            {{Form::token()}}
                              <div class="form-group">
                                  <label for="id" class="control-label mb-1">Ruc del proveedor</label>
                                  <input name="ruc_proveedor" type="number" class="form-control" placeholder="Ruc del proveedor" required value="{{$proveedor->ruc_proveedor}}">
                              </div>
                              <div class="form-group">
                                  <label for="nombre_proveedor" class="control-label mb-1">Nombre del proveedor</label>
                                  <input name="nombre_proveedor" type="text" class="form-control" placeholder="Nombre del proveedor" required value="{{$proveedor->nombre_proveedor}}">
                              </div>
                              <div class="form-group">
                                  <label for="direccion_proveedor" class="control-label mb-1">Direccion del proveedor</label>
                                  <input name="direccion_proveedor" type="text" class="form-control" placeholder="Direccion del proveedor" value="{{$proveedor->direccion_proveedor}}">
                              </div>
                              <div class="form-group">
                                  <label for="telefono_proveedor" class="control-label mb-1">Telefono del proveedor</label>
                                  <input name="telefono_proveedor" type="text" class="form-control" placeholder="Telefono del proveedor" required value="{{$proveedor->telefono_proveedor}}">
                              </div>
                              <div class="form-group">
                                  <label for="email_proveedor" class="control-label mb-1">Email del proveedor</label>
                                  <input name="email_proveedor" type="email" class="form-control" placeholder="Email del proveedor" value="{{$proveedor->email_proveedor}}">
                              </div>
                              <div>
                                  <button type="submit" class="btn btn-lg btn-info btn-block">
                                      <i class="fa fa-plus fa-lg"></i>
                                      <span id="payment-button-amount">Agregar</span>
                                  </button>
                              </div>
                          </form>
                      </div>
                  </div>

                </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection