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
                    <form action="{{route('save-order')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="estado" class="form-label">Numero de orden</label>
                          <input type="number" name="numorden" class="form-control" id="estado">
                        </div>
                        <div class="mb-3">
                          <label for="monto" class="form-label">Monto</label>
                          <input type="text" name="monto" class="form-control" id="monto">
                          {{-- <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div> --}}
                        </div>
                        <div class="mb-3">
                          <label for="estado" class="form-label">Estado</label>
                          <input type="text" name="estado" class="form-control" id="estado">
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
                          <input type="hidden" name="id_user" class="form-control" id="user" value="{{Auth::user()->id}}">
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
