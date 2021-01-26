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
                    <h5 class="card-title">Crear Cliente</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="form-control-label" for="input-name">Nombre *</label>
                                <input type="text" name="name" id="input-name" value="{{old('name')}}"
                                    class="form-control" placeholder="Nombre" required>
                                    @error('name')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                    @enderror
                                </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="form-control-label" for="input-name">ciuidad *</label>
                                <select name="city_id"  class="form-control">
                                    <option value="" selected disabled>Selecione una ciudad</option>
                                    @foreach ($cities as $item)
                                        <option {{old('city_id')==$item->id?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                        <span class="text-danger">
                                            {{$message}}
                                        </span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Crear cliente</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection