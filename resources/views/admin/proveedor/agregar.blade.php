@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Proveedores</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center">Agregar Proveedor</h3>
                          </div>
                          <hr>
                          <form method="POST" action="{{url('/proveedor')}}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="ruc_proveedor" class="control-label mb-1">Ruc del proveedor</label>
                                  <input name="ruc_proveedor" type="number" class="form-control" placeholder="Ruc del proveedor" required>
                              </div>
                              <div class="form-group">
                                  <label for="nombre_proveedor" class="control-label mb-1">Nombre del proveedor</label>
                                  <input name="nombre_proveedor" type="text" class="form-control" placeholder="Nombre del proveedor" required>
                              </div>
                              <div class="form-group">
                                  <label for="direccion_proveedor" class="control-label mb-1">Direccion del proveedor</label>
                                  <input name="direccion_proveedor" type="text" class="form-control" placeholder="Direccion del proveedor">
                              </div>
                              <div class="form-group">
                                  <label for="telefono_proveedor" class="control-label mb-1">Telefono del proveedor</label>
                                  <input name="telefono_proveedor" type="text" class="form-control" placeholder="Telefono del proveedor" required>
                              </div>
                              <div class="form-group">
                                  <label for="email_proveedor" class="control-label mb-1">Email del proveedor</label>
                                  <input name="email_proveedor" type="email" class="form-control" placeholder="Email del proveedor">
                              </div>
                              <div>
                                  <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                      <i class="fa fa-plus fa-lg"></i>&nbsp;
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