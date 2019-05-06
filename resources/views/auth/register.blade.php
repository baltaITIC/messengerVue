@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-3">
            @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </b-alert>
                @else
                <b-alert show>Por favor ingresa tus datos</b-alert>
                @endif

                <b-form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <b-form-group label="Correo electrónico:" label-for="email"
                        description="Cuidaremos tu información.">
                        <b-form-input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="example@email.com">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Nombre:" label-for="name">
                        <b-form-input type="name" id="name" name="name" value="{{ old('name') }}" required autofocus>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Contraseña:" label-for="password">
                        <b-form-input type="password" id="password" name="password"
                            required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Confimar contraseña:" label-for="password_confirmation">
                        <b-form-input type="password" id="password_confirmation" name="password_confirmation" 
                            required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-group>
                        <div class="col-md-8 col-md-offset-4">
                            <b-button type="submit" variant="primary">Confirmar Registro</b-button>
                            <b-buton class="btn btn-link" href="{{ route('login') }}">
                                ¿Ya te has registrado?
                            </b-buton>
                        </div>
                    </b-form-group>

                   

                </b-form>
            </b-card>

        </b-col>

    </b-row>

</b-container>

@endsection