@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesión" class="my-3">
               
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
                <b-form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <b-form-group label="Correo electrónico:" label-for="email">
                        <b-form-input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="example@email.com">
                        </b-form-input>
                    </b-form-group>

                    <b-form-group label="Contraseña:" label-for="password">
                        <b-form-input type="password" id="password" name="password" required>
                        </b-form-input>
                    </b-form-group>

                    <b-form-checkbox name="remember" {{ old('remember') ? 'checked="True"' : '' }}>
                        Recordar sesión
                    </b-form-checkbox>

                    <b-form-group>
                        <div class="col-md-8 col-md-offset-4">
                            <b-button type="submit" variant="primary">Ingresar</b-button>
                            <b-buton class="btn btn-link" href="{{ route('password.request') }}">
                                ¿Olvidaste Tu contraseña?
                            </b-buton>
                        </div>
                    </b-form-group>




                    <div class="form-group">

                    </div>
                    </div>

                </b-form>
            </b-card>
        </b-col>

    </b-row>
</b-container>
@endsection