@extends('layouts.app', [
    'class' => 'register-page',
    'backgroundImagePath' => 'img/bg/jan-sendereks.jpg'
])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-md-3 col-md-6 mr-auto">
                    <div class="card card-signup text-center">
                        <div class="card-header ">
                            <h4 class="card-title">{{ 'Establecer   contraseña' }}</h4>
                        </div>
                        <div class="card-body ">
                            <form class="form" method="POST" action="{{ route('set-password',request()->input()) }}">
                                @csrf
                                <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-lock-circle-open"></i>
                                        </span>
                                    </div>
                                    <input name="password" type="password" class="form-control" placeholder="Escriba contraseña" value="{{ old('password') }}" required autofocus>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group{{ $errors->has('password_confirmation ') ? ' has-danger' : '' }}">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="nc-icon nc-lock-circle-open"></i>
                                        </span>
                                    </div>
                                    <input name="password_confirmation" type="password" class="form-control" placeholder="confirme contraseña" required value="{{ old('password_confirmation ') }}">
                                    @if ($errors->has('password_confirmation '))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password_confirmation ') }}</strong>
                                        </span>
                                    @endif
                                    <input type="hidden" value="{{request()->token}}" name="token">
                                    <input type="hidden" value="{{request()->user}}" name="user">
                                </div>

                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-warning btn-round">{{ __('Asignar contraseña') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             </div>
        </div>
     </div> 
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            demo.checkFullPageBackgroundImage();
        });
    </script>
@endpush
