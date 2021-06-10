<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Paw Heroes - Login</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style-login.css">
    <link rel="icon" href="image/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">


</head>

<body>

    <!--Inicio do Formulário de Login-->
    <div>
        <div class="box">
            <img src="image/app-icon.png" class="icone margem">
            <form action="login_validation.php" method="post" class="form-control-lg form-login">
                <div class="form-group row">
                    <input class="margem" type="email" name="email" id="email" placeholder="Email para Login" required>
                </div>
                <div class="form-group row">
                    <input class="margem" type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <div class="form-group row">
                    <input class="btn margem botao-forma" type="submit" name="entrar" id="entrar" value="Entrar">
                </div>
            </form>


            <div class="row margem"><a href="cadastro.php"><u>Cadastre-se</u></a></div>

            <div class="box2">

            </div>

            <a href="casos.php">
                <u class="margem">Não sou uma ONG! Quero ajudar!</u>
            </a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>
</body>

</html>