<?php session_start();

if (!isset($_POST['d1j1'])) {
    $redirect = "./";

    header("location:$redirect");
    exit();
}

session_destroy();
session_unset();
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Imagem e Ação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link rel="icon shortcut" type="image/x-icon" href="imagens/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-1.12.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-qrcode-0.14.0.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<div class="container">
    <div class="menu text-center">
        <h1 class="quemvai">Criando Jogo...</h1>
        <h1 class="quemvai" style="font-size: 120px"><i class="fa fa-spinner fa-pulse fa-fw"></i></h1>
        <pre>
        <?php

        $_SESSION = $_POST;
        $_SESSION['pos1']=0;
        $_SESSION['pos2']=0;
        $_SESSION['vez']=1;
        $_SESSION['ad1j1'] =  substr($_SESSION['d1j1'], 0, 1);
        $_SESSION['ad1j2'] =  substr($_SESSION['d1j2'], 0, 1);
        $_SESSION['ad2j1'] =  substr($_SESSION['d2j1'], 0, 1);
        $_SESSION['ad2j2'] =  substr($_SESSION['d2j2'], 0, 1);
        //d1j2
        //d2j1
        //d2j2

        $redirect = "jogo.php";
        header("location:$redirect");
        ?>
        </pre>
    </div>
</div>

</body>
</html>