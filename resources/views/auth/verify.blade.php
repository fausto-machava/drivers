@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verificar o email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificacao foi enviado para o seu email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, porfavor verifique o seu email.') }}
                    {{ __('Se nao tiver recebido o link') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui para reenviar o link') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
