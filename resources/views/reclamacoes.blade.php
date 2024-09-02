@extends('home')

@section('conteudo')
    <div class="container mt-4">
        @foreach ($reclamacoes as $reclamacao)
            <div class="card mt-3">
                <div class="card-header bg-danger text-white">
                    <h5 class="card-title">Reclamação de Multa</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="font-weight-bold">Condutor:</span>
                            {{ $reclamacao->condutor }}
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-bold">Descrição:</span>
                            {{ $reclamacao->reclamacao }}
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-bold">Agente:</span>
                            {{ $reclamacao->agente }}
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-bold">Código da Multa:</span>
                            {{ $reclamacao->codigo_multa }}
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
@endsection
