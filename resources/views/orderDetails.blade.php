@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-outline-primary" role="button" href="{{route('create-details')}}">Crear detalles de orden</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de ordenes') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{Session::get('message')}}
                        </div>
                    @endif 

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Articulo</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                            <th scope="col">ID_orden</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderdetails as $item)
                                <tr>
                                    <th scope="row">{{$item->articulo}}</th>
                                    <td>{{$item->cantidad}}</td>
                                    <td>{{$item->precio}}</td>
                                    <td>{{$item->total}}</td>
                                    <td>{{$item->id_orders}}</td>
                                    <td><a class="text-dark" href="{{route('edit-details', [$item->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    <td>
                                        <form action="{{route('destroy-details', [$item->id])}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button style="border-style: none; padding-top: 0;" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </form>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
