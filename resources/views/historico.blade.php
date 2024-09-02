

@extends('home')


@section('conteudo')

    <div class="container mt-4">
        <h2>Histórico de Reclamações</h2>


        @foreach ($reclamacoesAgente as $reclamacao)


            <div class="agent-card">
                <div class="agent-name">{{$reclamacao->agente}}</div>
                <ul class="complaint-list">
                    <li>{{$reclamacao->reclamacao}}</li>


                </ul>
            </div>
        @endforeach

    </div>

@endsection
