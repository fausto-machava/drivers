@extends('home')

@section('conteudo')
    <div>
        {{ csrf_field() }}
        <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome do condutor</th>
                <th>Data de nascimento</th>
                <th>Número da carta</th>
                <th>Profissão</th>
                <th>Local de trabalho</th>
                <th>Nome do pai</th>
                <th>Nome da mãe</th>
                <th>Morada</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Condutores as $condutor)
                <tr>
                    <td scope="row">{{ $condutor->id }}</td>
                    <td>{{ $condutor->name }}</td>
                    <td>{{ $condutor->dataNasc }}</td>
                    <td>{{ $condutor->nrCarta }}</td>
                    <td>{{ $condutor->profissao }}</td>
                    <td>{{ $condutor->local }}</td>
                    <td>{{ $condutor->nomePai }}</td>
                    <td>{{ $condutor->nomeMae }}</td>
                    <td>{{ $condutor->morada }}</td>

                    <td>
                        <a href="#" class="btn btn-primary btnEditar"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-danger btnEliminar"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
          </table>

    </div>
@endsection
