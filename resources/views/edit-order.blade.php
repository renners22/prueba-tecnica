@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-outline-primary" role="button" href="">Crear Orden</a>
    </div> --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear orden') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <form action="{{route('update-order', [$order->id])}}" method="post">
                        @csrf
                        {{method_field('PATCH')}}
                        <div class="mb-3">
                          <label for="numorden" class="form-label">Numero de orden</label>
                          <input type="number" name="numorden" class="form-control" id="numorden" value="{{$order->numeroDeOrden}}" required>
                        </div>
                        <div class="mb-3">
                          <label for="fecha" class="form-label">Fecha</label>
                          <input type="datetime-local" name="fecha" class="form-control" id="fecha" value="{{$order->fecha}}" required>
                          {{-- <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div> --}}
                        </div>
                        <div class="mb-3">
                          <label for="monto" class="form-label">Monto</label>
                          <input type="text" name="monto" class="form-control" id="monto" value="{{$order->monto}}" required>
                          {{-- <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div> --}}
                        </div>
                        <div class="mb-3">
                          <label for="estado" class="form-label">Estado</label>
                          <input type="text" name="estado" class="form-control" id="estado" value="{{$order->estado}}" required>
                        </div>
                        <div class="mb-3">
                          <select class="form-select" name="id_details" aria-label="Default select example">
                              <option selected>Seleccionar detalles de orden ID</option>
                              @foreach ($id_details as $item)
                                  <option value="{{$item->id}}">{{$item->id}}</option>
                                  
                              @endforeach
                            </select>
                      </div>
                        <div class="mb-3">
                          <label for="user" class="form-label">Usuario</label>
                          <input type="number" name="id_user" class="form-control" id="user" value="{{$order->id_user}}">
                        </div>
                        {{-- <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Verificado</label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Enviar</button>
                      </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
