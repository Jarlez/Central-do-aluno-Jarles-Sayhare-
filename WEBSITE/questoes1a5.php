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
                <strong>1ª Questão</strong><br>
                <code>
                    function somar($x, $y){<br>
                    return $soma = intval($x) + intval($y);<br>
                    }<br><br>

                    $x = $_GET['valor1'];<br>
                    $y = $_GET['valor2'];<br>

                    echo somar($x, $y);
                </code>
            </div>
            <div class="col">
                <strong>2ª QUestão</strong><br>
                <code>
                    function media($val1, $val2, $val3) {<br>
                    return $media = (intval($val1) + intval($val2) + intval($val3)) / 3;<br>
                    }<br>
                    $val1 = $_GET['valor'];<br>
                    $val2 = $_GET['valor2'];<br>
                    $val3 = $_GET['valor3'];<br><br>
                    $media = media($val1, $val2, $val3);<br>

                    echo "A media foi $media";
                </code>
            </div>
            <div class="col">
                <strong>3ª Questão</strong><br>
                <code>
                    function quadrado($x) {<br>
                    return $r = intval($x) * intval($x);<br>
                    }<br>

                    $a = $_GET['valor1'];<br>
                    $b = $_GET['valor2'];<br><br>

                    $a = quadrado($a);<br>
                    $b = quadrado($b);<br>

                    $soma = intval($a) + intval($b);<br><br>

                    echo "A soma dos quadrados dos números é: $soma";<br>
                </code>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <strong>4ª Questão</strong><br>
                <code>
                    function transforma($x) {<br>
                    return $r = floatval($x) * 3.6;<br>
                    }<br><br>

                    $vel = $_GET['valor'];<br>

                    $resposta = transforma($vel);<br>

                    echo $resposta;
                </code>
            </div>
            <div class="col">
                <strong>5ª Questão</strong><br>
                <code>
                    <!-- poe o codigo da quinta aqui e identa kkk igual as outras pfv -->
                </code>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>