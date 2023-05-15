@extends('home')

@section('conteudo')
    <div>
        <div class="container">
            <h2 class="text-center">Reclamação</h2>
            <form method="POST" action="{{route('addReclamacao')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="multa">Multa:</label>
                    <select class="form-control" id="multa">
                        <option>Selecione a Multa</option>
                        @foreach ($Multas as $multa)

                        <option value="{{ $multa->artigo }}">{{ $multa->artigo }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="reclamacao">Reclamação:</label>
                    <textarea class="form-control" id="reclamacao" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </div>
@endsection
