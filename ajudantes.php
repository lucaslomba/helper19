<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161720643-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161720643-1');
</script>

    <title>HELP CORONA - COMPARTILHANDO AJUDA EM TEMPOS DE DESAFIOS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/rodape.css">
<script src="//code.jivosite.com/widget/jecSrmUREq" async></script>
</head>

<body>

    <!-- MENU PRINCIPAL DO SITE -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="helper19.com.br">Corona Solidario</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="helper19.com.br">Inicio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="precisodeajuda.html">Precisa de Ajuda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="queroajudar.html">Pode Ajudar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="empresadelivery.html">Empresas</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="text-center">
            <h2>Todos Ajudantes</h2>
        </div>
        <?php
            require("backend/conecta.php");

            $query = "SELECT * FROM `quero_ajudar`";
            $result = $conn->query($query);
            if ($result->num_rows >= 0) {
        ?>
        <div class="container"> 
            <div class="row">
                <?php while ($row = $result->fetch_array()) {  ?>
                <div class="col-md-3 mb-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title"><?php echo $row["nome"]; ?></h4>
                            <p><bold style="font-weight: 600">WhatsApp:</bold> <?php echo $row["whatsapp"] ?></p>
                            <p><bold style="font-weight: 600">Idade:</bold> <?php echo $row["idade"] ?> anos</p>
                            <p><bold style="font-weight: 600">Cidade:</bold> <?php echo $row["cidade"] ?></p>
                        </div>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>
    <footer id="myFooter">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-3 col-md-4">
                    <img src="./" alt="" width="200rem" height="200rem">
                </div>
                <div class="col-sm-1 d-flex flex-column align-items-center justify-content-center text-center">
                </div>
                <div class="col-sm-3 col-md-3">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="PrecisaAjuda.html">Precisa de Ajuda</a></li>
                        <li><a href="QuerAjudar.html">Pode Ajudar</a></li>
                        <li><a href="EmpresaAjudar.html">Empresas</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-md-4">
                    <h5>Sobre-nós</h5>
                    <aside id="text-4" class="widget widget_text">
                        <div class="textwidget">
                            <p>Projeto com objetivo de que pessoas e comércios possam se ajudar durante o período de
                                restrição de funcionamento no estado de São Paulo.</p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer-copyright d-flex justify-content-center">
            <p>©2020 Copyright</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="ajax/ajaxprecisoajuda.js"></script>


</body>

</html>