@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Productos</strong>
                </div>
                <div class="card-body">
                  <!-- Credit Card -->
                  <div id="pay-invoice">
                      <div class="card-body">
                          <div class="card-title">
                              <h3 class="text-center">Editar Producto</h3>
                          </div>
                          <hr>
                          {!! Form::model($producto,['method'=>'PATCH','url'=>['producto',$producto->id],'files'=>'true']) !!}
                            {{Form::token()}}
                              <div class="form-group">
                                  <label for="id" class="control-label mb-1">Codigo del producto</label>
                                  <input name="id" type="number" class="form-control" placeholder="Codigo del producto" required value="{{$producto->id}}">
                              </div>
                              <div class="form-group">
                                  <label for="nombre_producto" class="control-label mb-1">Nombre producto</label>
                                  <input name="nombre_producto" type="text" class="form-control" placeholder="Nombre del producto" required value="{{$producto->nombre_producto}}">
                              </div>
                              <div class="form-group">
                                  <label for="descripcion_producto" class="control-label mb-1">Descripcion del producto</label>
                                  <input name="descripcion_producto" type="text" class="form-control" placeholder="Descripcion del producto" value="{{$producto->descripcion_producto}}">
                              </div>
                              <div class="form-group">
                                  <label for="unidad_producto" class="control-label mb-1">Unidad del producto</label>
                                  <input name="unidad_producto" type="number" class="form-control" placeholder="Unidad del producto" required value="{{$producto->unidad_producto}}">
                              </div>
                              <div class="form-group">
                                  <label for="precio_producto" class="control-label mb-1">Precio del producto</label>
                                  <input name="precio_producto" type="number" class="form-control" placeholder="Precio del producto" required value="{{$producto->precio_producto}}">
                              </div>
                              <div class="form-group">
                                  <label for="stock_producto" class="control-label mb-1">Stock del producto</label>
                                  <input name="stock_producto" type="number" class="form-control" placeholder="Stock del producto" required value="{{$producto->stock_producto}}">
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