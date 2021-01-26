@extends('layouts.app', [
'class' => '',
'elementActive' => 'cities'
])

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="card-title">Ciudades</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('cities.create')}}" class="btn btn-primary">Crear ciudad</a>
                        </div>
                    </div>
                    @include('layouts.alerts')
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center text-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th></th>
                                    <th scope="col">COD</th>
                                    <th scope="col">Nombre</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $item)
                                <tr>
                                    <td></td>
                                    <td>{{$item->cod}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{route('cities.edit',$item->id)}}"><i
                                                class="nc-icon nc-ruler-pencil"></i>
                                        </a>
                                        {{-- @checkAction('destroy','diputados.destroy') --}}
                                            <button onclick="deleteResource('/cities',{{$item->id}})" class="btn btn-danger">
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
                        {{$cities->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection