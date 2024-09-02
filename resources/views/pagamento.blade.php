@extends('home')

@section('conteudo')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                Pagar Multa
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label for="codigoMulta">Código da Multa:</label>
                    <input disabled value="{{ $multa->codigo_multa }}" type="text" class="form-control" id="codigoMulta"
                        placeholder="Digite o código da multa">
                </div>
                <div class="form-group">
                    <label for="valorMulta">Valor:</label>
                    <input disabled value="{{ $multa->valor }}" type="text" class="form-control" id="valorMulta"
                        placeholder="Digite o valor da multa">
                </div>
                <div id="qrcode"></div>
                <button id="pagar" class="btn btn-primary">Pagar Multa</button>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('pagar').onclick = function() {
            var codigoMulta = $("#codigoMulta").val();
            var valorMulta = $("#valorMulta").val();

            // Gerar o QR Code usando o código da multa e valor
            var qrcode = new QRCode(document.getElementById("qrcode"), {
                text: "Multa: " + codigoMulta + "\nValor: " + valorMulta,
                width: 128,
                height: 128
            });
        }
    </script>
@endsection
