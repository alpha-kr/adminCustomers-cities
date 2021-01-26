@extends('layouts.app', [
'class' => '',
'elementActive' => 'customers'
])

@section('content')
<div class="content" id="app">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Editar ciudad</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('cities.update',$city)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label class="form-control-label" for="input-name">Nombre *</label>
                                <input type="text" name="name" id="input-name" value="{{$city->name}}"
                                    class="form-control" placeholder="Nombre" required>
                                    @error('name')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>
                            
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Actualizar ciudad</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection