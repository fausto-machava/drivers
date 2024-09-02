<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f7f7f7;
    }
    h1 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .btn-login {
      width: 100%;
      padding: 10px;
      font-weight: bold;
      text-transform: uppercase;
      border: none;
      border-radius: 4px;
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
    }
    .btn-login:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>POLÍCIA DA REPÚPLICA DE MOÇAMBIQUE DEPARTAMENTO DA PT MAPUTO - CIDADE</h1>
    <p>
        Foi avisado {{ $dados->condutor }} que foi actuado na {{ $dados->local }} com veiculo
        {{ $dados->matricula }} com a multa de {{ $dados->valor }} MT por haver transgredido o Artigo {{ $dados->artigo }}
        e que devera satisfazer no prazo de quinze(15) dias na tesouraria do Departamento de transito
        ou Apresentar reclamacao no INATRO.
    </p>

    <p>Data: {{ $dados->data }}</p>

    <p>O agente actuante: {{ $dados->agente }}</p>
  </div>
</body>
</html>
