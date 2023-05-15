@extends('home')

@section('conteudo')
    <div>
        <form method="POST" action="{{ route('addCondutor') }}">
            {{ csrf_field() }}
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Cadastrar condutor</h1>
            </div>
            <div class="form-group">
              <label for="nome-condutor">Nome do Condutor:</label>
              <input type="text" class="form-control" name="nome" id="nome-condutor" placeholder="Insira o nome do condutor">
            </div>
            <div class="form-group">
              <label for="data-nascimento">Data de Nascimento:</label>
              <input type="date" class="form-control" name="dataNasc" id="data-nascimento">
            </div>
            <div class="form-group">
              <label for="numero-carta">Número da Carta:</label>
              <input type="text" class="form-control" name="nrCarta" id="numero-carta" placeholder="Insira o número da carta">
            </div>
            <div class="form-group">
              <label for="profissao">Profissão:</label>
              <input type="text" class="form-control" name="profissao" id="profissao" placeholder="Insira a profissão do condutor">
            </div>
            <div class="form-group">
              <label for="local-trabalho">Local de Trabalho:</label>
              <input type="text" class="form-control" name="local" id="local-trabalho" placeholder="Insira o local de trabalho do condutor">
            </div>
            <div class="form-group">
              <label for="nome-pai">Nome do Pai:</label>
              <input type="text" class="form-control" name="nomePai" id="nome-pai" placeholder="Insira o nome do pai do condutor">
            </div>
            <div class="form-group">
              <label for="nome-mae">Nome da Mãe:</label>
              <input type="text" class="form-control" name="nomeMae" id="nome-mae" placeholder="Insira o nome da mãe do condutor">
            </div>
            <div class="form-group">
              <label for="morada">Morada:</label>
              <input type="text" class="form-control" name="morada" id="morada" placeholder="Insira a morada do condutor">
            </div>
            <button type="submit" class="btn btn-primary">Cadastar</button>
          </form>
    </div>
@endsection
