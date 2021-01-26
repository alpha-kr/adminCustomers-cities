@extends('layouts.app', [
'class' => '',
'elementActive' => 'customers'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="card-title">cliente</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('customers.create')}}" class="btn btn-primary">Crear cliente</a>
                            <button class="btn btn-primary btn-filter"><i class="fa fa-filter" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    @include('layouts.alerts')
                    <div class="card  form-filter" style="display: none">
                        <div class="card-header bg-primary text-white">
                            <h5>Filtros</h5>
                        </div>
                        <div class="card-body">
                            <form  action="{{route('customers.index')}}"  method="get">
                                <div class="row">
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name"   class="form-control"
                                            placeholder="Escriba nombre" aria-describedby="helpId" value="{{request()->name}}">
                                        <small id="helpId" class="text-muted">Nombre filtro</small>
                                    </div>
                                    <div class="col-12 col-md-6 form-group">
                                        <label for="name">Ciudad</label>
                                        <select name="city" class="form-control" id="">
                                            <option value="" selected>Seleccione ciudad</option>
                                            @foreach ($cities as $item)
                                                <option {{$item->id==request()->city?'selected':''}} value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-6 form-group">
                                        <button type="submit"  class="btn btn-primary">filtrar</button>                                 
                                        <a href="{{route('customers.index')}}"    class="btn btn-danger">Limpiar</a>                                 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center text-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th scope="col">COD</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Ciudad</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $item)
                                <tr>
                                    <td></td>
                                    <td>{{$item->cod}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->city->name}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('customers.edit',$item->id)}}"><i
                                                class="nc-icon nc-ruler-pencil"></i>
                                        </a>
                                        {{-- @checkAction('destroy','diputados.destroy') --}}
                                            <button onclick="deleteResource('/customers',{{$item->id}})" class="btn btn-danger">
                                                <i class="nc-icon nc-box"></i>
                                            </button>
                                        {{-- @endcheckAction --}}
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end mt-3">
                        {{$customers->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection