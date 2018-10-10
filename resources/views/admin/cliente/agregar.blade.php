@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Clientes</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center">Agregar Cliente</h3>
                          </div>
                          <hr>
                          <form method="POST" action="{{url('/cliente')}}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
                            {{ csrf_field() }}
                              <div class="form-group">
                                  <label for="id" class="control-label mb-1">Ruc del cliente</label>
                                  <input name="ruc_cliente" type="number" class="form-control" placeholder="Ruc del cliente" required>
                              </div>
                              <div class="form-group">
                                  <label for="nombre_cliente" class="control-label mb-1">Nombre del cliente</label>
                                  <input name="nombre_cliente" type="text" class="form-control" placeholder="Nombre del cliente" required>
                              </div>
                              <div class="form-group">
                                  <label for="direccion_cliente" class="control-label mb-1">Direccion del cliente</label>
                                  <input name="direccion_cliente" type="text" class="form-control" placeholder="Direccion del cliente">
                              </div>
                              <div class="form-group">
                                  <label for="telefono_cliente" class="control-label mb-1">Telefono del cliente</label>
                                  <input name="telefono_cliente" type="text" class="form-control" placeholder="Telefono del cliente" required>
                              </div>
                              <div class="form-group">
                                  <label for="email_cliente" class="control-label mb-1">Email del cliente</label>
                                  <input name="email_cliente" type="email" class="form-control" placeholder="Email del cliente">
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