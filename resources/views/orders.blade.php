@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-outline-primary" role="button" href="{{route('create-order')}}">Crear Orden</a>
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
                            <th scope="col">Numero</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Monto</th>
                            <th scope="col">Estado</th>
                            <th scope="col">User</th>
                            <th scope="col">Orden_detalles</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{$order->numeroDeOrden}}</th>
                                    <td>{{$order->fecha}}</td>
                                    <td>{{$order->monto}}</td>
                                    <td>{{$order->estado}}</td>
                                    <td>{{$order->id_user}}</td>
                                    <td>{{$order->id_details}}</td>
                                    <td><a class="text-dark" href="{{route('edit-order', [$order->id])}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                                    <td>
                                        <form action="{{route('delete-order', [$order->id])}}" method="post">
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
