<!DOCTYPE html>
<html>

<head>
    <title>Impressão de Dados do Usuário</title>
    <style>
        @media print {
            .noprint {
                display: none;
            }
        }

        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        .field {
            margin-bottom: 10px;
        }

        .field label {
            font-weight: bold;
            display: block;
        }

        .field span {
            color: #666;
        }

        .field input[type="text"] {
            width: 300px;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .noprint {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <h1>Dados do Condutor</h1>

    <div class="field">
        <label for="nomeCondutor">Nome do Condutor:</label>
        <span id="nomeCondutor">{{ $utilizador->name }}</span>
    </div>

    <div class="field">
        <label for="dataNascimento">Data de Nascimento:</label>
        <span id="dataNascimento">{{ $utilizador->dataNasc }}</span>
    </div>

    <div class="field">
        <label for="numeroCarta">Número da Carta:</label>
        <span id="numeroCarta">{{ $utilizador->nrCarta }}</span>
    </div>

    <div class="field">
        <label for="profissao">Profissão:</label>
        <span id="profissao">{{ $utilizador->profissao }}</span>
    </div>

    <div class="field">
        <label for="localTrabalho">Local de Trabalho:</label>
        <span id="localTrabalho">{{ $utilizador->local }}</span>
    </div>

    <div class="field">
        <label for="nomePai">Nome do Pai:</label>
        <span id="nomePai">{{ $utilizador->nomePai }}</span>
    </div>

    <div class="field">
        <label for="nomeMae">Nome da Mãe:</label>
        <span id="nomeMae">{{ $utilizador->nomeMae }}</span>
    </div>

    <div class="field">
        <label for="morada">Morada:</label>
        <span id="morada">{{ $utilizador->morada }}</span>
    </div>

    <div class="field">
        <label for="email">Email:</label>
        <span id="email">{{ $utilizador->email }}</span>
    </div>

    <div class="field">
        <label for="senha">Senha:</label>
        <span id="senha">{{ $utilizador->password }}</span>
    </div>
</body>

</html>
