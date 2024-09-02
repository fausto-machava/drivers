@extends('home')

{{--
<div class="card">
    <div class="card-header bg-primary text-white">
      <h5 class="card-title">Descrição do Pedido</h5>
    </div>
    <div class="card-body">
      <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor pretium venenatis. Nunc ut tellus id justo commodo tincidunt.</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span>Preço:</span>
          <span>R$ 100,00</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span>Cliente:</span>
          <span>João da Silva</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <span>Estado de Pagamento:</span>
          <span class="text-success"><i class="bi bi-check-circle-fill"></i> Pago</span>
        </li>
      </ul>
    </div>
  </div>

  <div class="card">
      <div class="card-header bg-warning text-white">
        <h5 class="card-title">Descrição do Pedido</h5>
      </div>
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempor pretium venenatis. Nunc ut tellus id justo commodo tincidunt.</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>Preço:</span>
            <span>R$ 100,00</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>Cliente:</span>
            <span>João da Silva</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span>Estado de Pagamento:</span>
            <span class="text-danger"><i class="bi bi-exclamation-circle-fill"></i> Pendente</span>
          </li>
        </ul>
      </div>
      <div class="card-footer">
        <button class="btn btn-primary"><i class="bi bi-credit-card"></i> Pagar</button>
      </div>
    </div>
  --}}


@section('conteudo')
    <div>
        {{-- <table class="table table-striped"> --}}
        <table class="table">
            {{-- <thead>
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
            </thead> --}}
            <tbody>
                @foreach ($Multas as $multa)
                    <tr class="">
                        <div class="card mt-2">
                            <div class="card-header bg-primary text-white">
                                <h5 class="card-title">Detales da multa</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{ $multa->detalhes }}</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Valor:</span>
                                        <span>MZN {{ $multa->valor }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Condutor:</span>
                                        <span>{{ $multa->condutor }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Data:</span>
                                        <span>{{ $multa->data }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Hora:</span>
                                        <span>{{ $multa->hora }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Local:</span>
                                        <span>{{ $multa->local }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Estado do condutor:</span>
                                        <span>{{ $multa->estado }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Agente actuante:</span>
                                        <span>{{ $multa->agente }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Estado de Pagamento:</span>
                                        @if ($multa->pagamento == 1)
                                            <span class="text-success"><i class="bi bi-check-circle-fill"></i> Pago</span>
                                        @else
                                            <span class="text-danger"><i class="bi bi-exclamation-circle-fill"></i>
                                                Pendente</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            @if ($multa->pagamento == 0 && Auth::user()->nivelAcesso == 'condutor')
                                <div class="card-footer">
                                    <form method="POST" action="{{ route('pagePagamento') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="hidden" name="multa" value="{{ $multa->id }}"/>
                                        </div>
                                        <button class="btn btn-primary"><i class="bi bi-credit-card"></i> Pagar</button>
                                    </form>
                                </div>
                            @endif
                            <div class="card-footer">
                                <a href="{{ route('recibo', ['id' => $multa->id]) }}" class="btn btn-danger btnEliminar"><i
                                    class="bi bi-printer"></i></a>
                            </div>
                        </div>
                        {{-- <td scope="row">{{ $multa->condutor }}</td>
                        <td>{{ $multa->data }}</td>
                        <td>{{ $multa->hora }}</td>
                        <td>{{ $multa->local }}</td>
                        <td>{{ $multa->agente }}</td>
                        <td>{{ $multa->matricula }}</td>
                        <td>{{ $multa->estado }}</td>
                        <td>{{ $multa->artigo }}</td>
                        <td>{{ $multa->valor }}</td>

                        <td>
                            <a href="#" class="btn btn-primary btnEditar"><i class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger btnEliminar"><i class="bi bi-trash"></i></a>
                            <a href="{{ route('recibo', ['id' => $multa->id]) }}" class="btn btn-danger btnEliminar"><i
                                    class="bi bi-printer"></i></a>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- <div class="d-flex justify-content-center mt-4">
            {{ $Multas->links() }}
        </div> --}}
    </div>
@endsection
