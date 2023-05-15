@extends('home')

@section('conteudo')
    <div>
        <form method="POST" action="{{route('addMulta')}}">
            {{ csrf_field() }}
            <div class="text-center mb-4">
                <h1 class="h3 mb-3 font-weight-normal">Cadastrar Multa</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="condutor">Condutor:</label>
                        <select name="condutor" class="form-control" id="condutor">
                            <option>Selecione o condutor</option>
                            @foreach ($Condutores as $condutor)
                                    <option value="{{ $condutor->name }}">{{ $condutor->name }}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="data-transgressao">Data da transgressão:</label>
                        <input name="data" type="date" class="form-control" id="data-transgressao">
                    </div>
                    <div class="form-group">
                        <label for="hora-transgressao">Hora da transgressão:</label>
                        <input name="hora" type="time" class="form-control" id="hora-transgressao">
                    </div>
                    <div class="form-group">
                        <label for="local-transgressao">Local da transgressão:</label>
                        <input name="local" type="text" class="form-control" id="local-transgressao"
                            placeholder="Insira o local da transgressão">
                    </div>
                    <div class="form-group">
                        <label for="agente-actuante">Nome do agente actuante:</label>
                        <input name="agente" type="text" class="form-control" id="agente-actuante"
                            placeholder="Insira o nome do agente actuante">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="matricula-viatura">Matrícula da viatura:</label>
                        <input name="matricula" type="text" class="form-control" id="matricula-viatura"
                            placeholder="Insira a matrícula da viatura">
                    </div>
                    <div class="form-group">
                        <label for="marca-viatura">Marca da viatura:</label>
                        <input name="marca" type="text" class="form-control" id="marca-viatura"
                            placeholder="Insira a marca da viatura">
                    </div>
                    <div class="form-group">
                        <label for="estado-condutor">Estado do condutor:</label>
                        <input name="estado" type="text" class="form-control" id="estado-condutor"
                            placeholder="Insira o estado do condutor">
                    </div>
                    <div class="form-group">
                        <label for="artigo-infringido">Artigo infringido:</label>
                        <input name="artigo" type="text" class="form-control" id="artigo-infringido"
                            placeholder="Insira o artigo infringido">
                    </div>
                    <div class="form-group">
                        <label for="valor-multa">Valor da multa:</label>
                        <input name="valor" type="text" class="form-control" id="valor-multa" placeholder="Insira o valor da multa">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="detalhes-adicionais">Detalhes adicionais:</label>
                <textarea name="detalhes" class="form-control" id="detalhes-adicionais" rows="3"></textarea>
            </div>

            <button name="" type="submit" class="btn btn-primary">Multar</button>
        </form>
    </div>
@endsection
