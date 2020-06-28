<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Central do aluno</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Suez+One&display=swap" rel="stylesheet">

</head>

<body>

    <!--  ABA QUESTÕES  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <h2>Website-PHP</h2>
        </div>

        <!--Botão de Questões -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Questões
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- Colocar total de Questões -->
                        <a class="dropdown-item" href="questoes1a5.php" target='_blank'>Questões 1 à 5</a>
                        <a class="dropdown-item" href="questoes6a10.php" target='_blank'>Questões 6 à 10</a>
                </li>
            </ul>
        </div>
    </nav>



    <!-- Centro da página-->
    <br>
    <br>
    <main>
        <h3> Informações sobre atividade</h3>

        <br>
        <h4>Página INDEX.PHP</h4>
        <p>

            A atvidade pede para construir um site utilizando todas essas tecnologias:GITHUB, HTML, CSS, JAVASCRIPT e PHP. O site deve conter algum templete CSS(Bootstrap ou Materialize).Tem que haver o uso de INCLUDE para TOPO e RODAPÉ, SIDEBAR
            No menu no topo deverá existir um link com todas as questões resolvidas.
            No centro da página deverá conter informações sobre a atividade.
            No rodapé deve conter um ícone e o link de acesso desse projeto de WEBSITE no repositório
            no GITHUB.
        </p>
        <br>
        <h4>Link de QUESTÕES</h4>
        <p>

            Ao clicar no menu do TOPO deve ser listado um menu com link de acesso a todas as questões
            desse exercício.
            Ao clicar em uma dessas questões o usuário deve ser redirecionado a página que mostre a
            questão resolvida.
            O WEBSITE deverá ser enviado para o servidor de hospedagem gratuito INFINITY FREE.
            O envio dessa atividade deve ser feito pela plataforma UNILEÃO DIGITAL, onde cada aluno deverá enviar
            APENAS o LINK de acesso ao SITE. Ex.: http://www.wellington.epizy.com.

        </p>
    </main>

    <br>
    <!-- Rodapé GITHUB-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">GITHUB</h4>
                    <a class="Alterarcor" href="https://github.com/Jarlez/Central-do-aluno-Jarles-Sayhare-" target='_blank'>Link do repositório</a>
                </div>
            </div>
        </div>
    </footer>
    <!------------------------------------------------------------------------------------------------------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>























</body>

</html>