@extends('home')

@section('conteudo')
    <div class="card">
        <div class="card-header">
            Selecione a multa
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('pagePagamento')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="multa">Multa:</label>
                    <select class="form-control" id="multa" name="multa">
                        <option>Selecione a Multa</option>
                        @foreach ($multas as $multa)

                        <option value="{{ $multa->id }}">{{ $multa->codigo_multa }}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-cash"></i> Pagar Multa
                  </button>
            </form>
        </div>
    </div>
@endsection
