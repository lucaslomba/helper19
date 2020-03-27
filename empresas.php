<!doctype html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Helper19 - Compartilhando ajuda em tempos de Crise!</title>
    <link rel="icon" href="./imghome/Care.png" sizes="32x32">

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="cssmaterialize/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="cssmaterialize/styledefault.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-161720643-1');
    </script>
    <script src="//code.jivosite.com/widget/jecSrmUREq" async></script>
</head>

<body onload="pesquisapadrao()">

    <!-- MENU PRINCIPAL DO SITE -->
    <nav class="blue darken-3">
        <div class="nav-wrapper container">
            <a href="/" class="brand-logo left-align" style="padding-top: 1%;"><img src="./imghome/Care.png"
                    alt="logo helper19" height="auto" width="55vh"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="precisodeajuda.html">Preciso de Ajuda</a></li>
                <li><a href="queroajudar.html">Quero Ajudar</a></li>
                <li><a href="empresadelivery.html">Para Empresas</a></li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="precisodeajuda.html">Preciso de Ajuda</a></li>
        <li><a href="quereajudar.html">Quero Ajudar</a></li>
        <li><a href="empresadelivery.html">Para Empresas</a></li>
        <li><a href="ajudantes.php">Todos Ajudantes</a></li>
        <li><a href="quereajudar.html">Pessoas Para Ajudar</a></li>
        <li><a href="empresas.php">Todas Empresas</a></li>
        <li><a href="empresas.php">Delivery</a></li>
    </ul>


    <div>
        <div class="container center" style="margin-top: 8vh">
            <h2>Comércios Disponíveis</h2>
        </div>
        <div class="row">
            <div class="col s1 l4"></div>
            <div class="input-field col s10 l4" style="border: solid 1px; border-color: #adadad; border-radius: 5px; border-top: none; border-right: none">
                <input id="cidadesearch" type="text" class="validate" onkeyup="pesquisacidade()">
                <label class="active" id="labelcidade" for="cidadesearch">Digite o que você precisa ou sua cidade</label>
            </div>
        </div>

        <div id="cardsempresas">
            <!-- card de empresa que virá com AJAX -->
        </div>
    </div>
    <footer class="page-footer  light-blue darken-3">
        <div class="container">
            <div class="row">
                <div class="col l6 s12 center">
                    <img src="./imghome/Care.png" alt="Logo Helper19" height="auto" width="150vh">
                    <p class="grey-text text-lighten-4">Usando a tecnologia para ajudar pessoas em tempos dificeis.
                        Helper19 seu ajudante virtual!</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Pessoas</h5>
                    <ul>
                        <li><a class="white-text" href="queroajudar.html">Quero Ajudar</a></li>
                        <li><a class="white-text" href="ajudantes.php">Pessoas ajudando</a></li>
                        <li><a class="white-text" href="precisodeajuda.html">Precisa de Ajuda?</a></li>
                        <li><a class="white-text" href="queroajuda.php">Pessoas para Ajudar</a></li>

                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Empresa</h5>
                    <ul>
                        <li><a class="white-text" href="empresadelivery.html">Divulgar meu Comercio</a></li>
                        <li><a class="white-text" href="empresadelivery.html">Divulgar Minha Empresa</a></li>
                        <li><a class="white-text" href="empresas.php">Veja as empresas</a></li>
                        <li><a class="white-text" href="mailto:contato@helper19.com">Como Ajudar o Helper19</a></li>
                        <li><a class="white-text" href="mailto:parceria@helper19.com">Parceria com Helper19</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Desenvolvido por <a class="orange-text text-lighten-3" href="https://herlper19.com.br">Helper19</a>
            </div>
        </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="jsmaterialize/materialize.js"></script>
    <script src="jsmaterialize/init.js"></script>
    <script>
        window.onload = function () {
            function typeWriter(elemento) {
                const textoArray = elemento.innerHTML.split('');
                console.log(textoArray);
                elemento.innerHTML = '';
                textoArray.forEach((letra, i) => {
                    console.log(i)
                    setTimeout(function () {
                        elemento.innerHTML += letra;
                    }, 75 * i)
                });
            }
            const titulo = document.querySelector('#escrever');
            typeWriter(titulo);

            let imagemum = document.getElementById("doente")
            imagemum.setAttribute('src', 'https://helper19.com.br/imghome/DoenteOtimizada.png')
            let imagemdois = document.getElementById("caradocel")
            imagemdois.setAttribute('src', 'https://helper19.com.br/imghome/caraDoCelOtimizada.png')
            let imagemtres = document.getElementById("feliz")
            imagemtres.setAttribute('src', 'https://helper19.com.br/imghome/felizOtimizado.png')


            let queroajudar = document.getElementById("ajudar")
            queroajudar.setAttribute('src', 'https://helper19.com.br/imghome/jovensadisposicao.jpg')

            let queroajuda = document.getElementById("ajuda")
            queroajuda.setAttribute('src', 'https://helper19.com.br/imghome/precisamosdeajuda.png')
            let empresas = document.getElementById("empresas")
            empresas.setAttribute('src', 'https://helper19.com.br/imghome/deliveryservicos.jpg')

        };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function pesquisacidade() {
            $('#cardsempresas').load('backend/cardsempresa.php?cidade=' + $('#cidadesearch')
                .val());
        }
    </script>
    <script>
        $(document).ready(
        function () {
            $('#cardsempresas').load('backend/cardsempresapadrao.php');
        });
    </script>
</body>

</html>