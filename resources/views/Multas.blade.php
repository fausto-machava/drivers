@extends('home')

@section('conteudo')
    <div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Condutor</th>
                <th>Data de transgressão</th>
                <th>Hora da transgressão</th>
                <th>Local da transgressão</th>
                <th>Agente atuante</th>
                <th>Matrícula da viatura</th>
                <th>Estado do condutor</th>
                <th>Artigo infringido</th>
                <th>Valor da multa</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($Multas as $multa)
                <tr>
                    <td scope="row">{{ $multa->condutor }}</td>
                    <td>{{ $multa->data }}</td>
                    <td>{{ $multa->hora }}</td>
                    <td>{{ $multa->local }}</td>
                    <td>{{ $multa->agente }}</td>
                    <td>{{ $multa->matricula }}</td>
                    <td>{{ $multa->estado }}</td>
                    <td>{{ $multa->artigo }}</td>
                    <td>{{ $multa->valor }}</td>

                    <td>
                        <a href="#" class="btn btn-primary btnEditar"><i
                                class="bi bi-pencil-square"></i></a>
                        <a href="#" class="btn btn-danger btnEliminar"><i class="bi bi-trash"></i></a>
                        <a href="{{route('recibo')}}" class="btn btn-danger btnEliminar"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
          </div>
@endsection
