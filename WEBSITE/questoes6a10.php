<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Questões 1-5</title>

    <style>
        #space {
            margin-top: 30px;
        }

        body {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="container" id="space">
        <div class="row">
            <div class="col">
                <strong>6ª Questão</strong><br>
                <code>
                    $valor = $_GET['valor'];<br>

                    $desconto = intval($valor) * 0.07;<br>

                    $valorD = intval($valor) - intval($desconto);<br>
                    <br>
                    echo "O valor original é: $valor";<br>
                    echo "O valor do desconto é : $desconto\n";<br>
                    echo "O valor com o desconto é: $valorD";<br>

                </code>
            </div>
            <div class="col">
                <strong>7ª QUestão</strong><br>
                <code>
                    for($x = 0; $x < 20; $x++) {<br>
                        $valor[100] = fgets(STDIN, 1000);<br>
                        }<br>

                        for($y = 0; $y < 10; $y++){<br>
                            $soma = 0;<br>
                            $soma = $valor[$y];<br>
                            }<br>

                            echo $soma;<br>
                </code>
            </div>
            <div class="col">
                <strong>9ª Questão</strong><br>
                <code>
                    $valor =$_GET['valor'];

                    $acrescimo = floatval($valor) * 0.16;

                    $valorN = floatval($valor) + floatval($acrescimo);

                    $valorParcela = floatval($valorN) / 10;

                    $valorParcela = number_format($valorParcela, 2, '.', '');

                    echo "Valor da Parcela: $valorParcela\n";
                    echo "Valor total da compra: $valorN";
                </code>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <strong>10ª Questões</strong><br>
                <code>
                    $distancia = $_GET['valor'];<br>
                    $combustivel = $_GET['valor2'];<br>
                    $consumo;<br>

                    $consumo = intval($distancia) / intval($combustivel);<br>

                    echo $consumo;<br>
                </code>
            </div>
            <div class="col">
                <strong>8ª Questão</strong><br>
                <code>
                    function somar($a, $b){<br>
                    echo 'Resultado = '.(intval($a)+intval($b));<br>
                    }<br>

                    function subtrair($a, $b){<br>
                    echo 'Resultado = '.(intval($a)-intval($b));<br>
                    }<br>

                    function dividir($a, $b){<br>
                    echo 'Resultado = '.(intval($a)/intval($b));<br>
                    }<br>

                    function multiplicar($a, $b){<br>
                    echo 'Resultado = '.(intval($a)*intval($b));<br>
                    }<br>
                    echo 'Defina o primeiro valor: ';<br>
                    $x = fgets(STDIN, 1000);<br>

                    echo 'Defina o segundo valor: ';<br>
                    $y = fgets(STDIN, 1000);<br>

                    echo 'Escolha a operação: ';<br>
                    $operacoes = fgets(STDIN, 1000);<br>

                    $operacoes = intval($operacoes);<br>

                    $a = fgets(STDIN, 1000);<br>
                    $b = fgets(STDIN, 1000);<br>

                    if($operacoes == '1'){<br>
                    somar($x, $y);<br>
                    }<br>
                    else if($operacoes == '2'){<br>
                    subtrair($x, $y);<br>
                    }<br>
                    else if($operacoes == '3'){<br>
                    dividir($x, <br>$y);<br>
                    }
                    else if($operacoes == '4'){<br>
                    multiplicar($x, $y);<br>
                    }<br>

                    ?>
                </code>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>