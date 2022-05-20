<?php

if ((isset($_SESSION['cLogin'])) && (!empty($_SESSION['cLogin']))) { ?>

<script type="text/javascript">
window.location.href = "home";
</script>



<?php die();
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <title>Sistemas SULTEC | ERP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Desenvolvimento de Webservice" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="IdiDeveloper Soluções" />
    <meta property="og:url" content="https://idideveloper.com.br" />
    <meta property="og:site_name" content="Developer Idiframk Silva" />
    <link
        href="https://fonts.googleapis.com/css?family=Julius+Sans+One|Lato:100,200,300,300i,400,400i,500,700,700i,900|Marcellus|Bad+Script:Normal 400|Open+Sans:300,300i,400,400i,600,600i,700,700i|Quattrocento+Sans:400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i"
        rel="stylesheet">
    <meta name="robots" content="index, follow, all">
    <meta name="msnbot" content="all">
    <meta name="googlebot" content="index, follow">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base; ?>/assets/img/sultec-favicon.ico">
    <link rel="stylesheet" href="<?php echo $base; ?>/assets/dist/css/alt/css-login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>



    <div class="login-page"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="form">
                    <img id="logoLg" src="<?php echo $base; ?>/assets/img/logo_ofic.png" alt="">

                    <form class="login-form" method="POST" action="<?= $base; ?>/login">
                        <input type="text" placeholder="Usuário ou E-mail" required name="email" />
                        <input type="password" placeholder="Sua senha" name="senha" required />
                        <button>Entrar</button>
                        <p class="message">Não é registrado? <a href="mailto:ti@sultec.eng.br">ti@sultec.eng.br</a></p>
                        <p class="message"><a href="esqueci-a-senha">Não Conseguiu entrar?</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
// Iniciará quando todo o corpo do documento HTML estiver pronto.
$().ready(function() {
    setTimeout(function() {
        $('#foo').hide(); // "foo" é o id do elemento que seja manipular.
    }, 2500); // O valor é representado em milisegundos.
});
</script>

</html>