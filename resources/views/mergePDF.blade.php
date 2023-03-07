@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista de usuarios') }}</div>

                <div class="card-body">

                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            {{Session::get('message')}}
                        </div>
                    @endif 


                    <form method="post" action="{{ route('merge.pdf.post') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="file" name="filenames[]" class="myfrm form-control" multiple="">
                        <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
                    </form>   

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
