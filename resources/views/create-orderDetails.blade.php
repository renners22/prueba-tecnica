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
                    <form action="{{route('save-details')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="articulo" class="form-label">Articulo</label>
                          <input type="text" name="articulo" class="form-control" id="articulo" required>
                        </div>
                        <div class="mb-3">
                          <label for="cantidad" class="form-label">Cantidad</label>
                          <input type="number" name="cantidad" class="form-control" id="cantidad" required>
                          {{-- <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div> --}}
                        </div>
                        <div class="mb-3">
                          <label for="precio" class="form-label">Precio</label>
                          <input type="text" name="precio" class="form-control" id="precio" required>
                        </div>
                        <div class="mb-3">
                          <label for="total" class="form-label">Total</label>
                          <input type="text" name="total" class="form-control" id="total" required>
                        </div>
                        {{-- <div class="mb-3">
                          <input type="hidden" name="id_user" class="form-control" id="user" value="{{Auth::user()->id}}">
                        </div> --}}

                        <div class="mb-3">
                            <select class="form-select" name="id_orders" aria-label="Default select example">
                                <option selected>Seleccionar orden ID</option>
                                @foreach ($id_orders as $item)
                                    <option value="{{$item->id}}">{{$item->id}}</option>
                                    
                                @endforeach
                              </select>
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
