<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Paw Heroes - Cadastre-se</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style-cadastro.css">
    <link rel="icon" href="image/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!--icone do site-->
    <div class="row">

    </div>


    <!--Inicio do Formulário de Cadastro nome, cidade estado whatsapp-->
    <div>
        <div class="box">
            <img src="image/app-icon.png" class="icone margem">
            <form action="register.php" method="POST" class="form-control-lg form-login">
                <div class="form-group row">
                    <input class="margem" type="text" name="nomeong" id="nomeong" placeholder="Nome da ONG" required>
                </div>
                <div class="form-group row">
                    <input class="margem" type="email" name="email" id="email" placeholder="E-mail" required>
                </div>
                <div class="form-group row">
                    <input class="margem" type="password" name="senha" id="senha" placeholder="Senha" required>
                </div>
                <div class="form-group row">
                    <input class="margem" type="text" name="cidade" id="cidade" placeholder="Cidade" required>
                </div>
                <div class="form-group row">
                    <select id="estado" name="estado" class="margem" onfocus='this.size=10;' onblur='this.size=0;'
                        onchange='this.size=1; this.blur();' required>
                        <option value="ac" selected disabled>Estado</option>
                        <option value="ac">AC</option>
                        <option value="al">AL</option>
                        <option value="ap">AP</option>
                        <option value="am">AM</option>
                        <option value="ba">BA</option>
                        <option value="ce">CE</option>
                        <option value="df">DF</option>
                        <option value="es">ES</option>
                        <option value="go">GO</option>
                        <option value="ma">MA</option>
                        <option value="mt">MT</option>
                        <option value="ms">MS</option>
                        <option value="mg">MG</option>
                        <option value="pa">PA</option>
                        <option value="pb">PB</option>
                        <option value="pr">PR</option>
                        <option value="pe">PE</option>
                        <option value="pi">PI</option>
                        <option value="rj">RJ</option>
                        <option value="rn">RN</option>
                        <option value="rs">RS</option>
                        <option value="ro">RO</option>
                        <option value="rr">RR</option>
                        <option value="sc">SC</option>
                        <option value="sp">SP</option>
                        <option value="se">SE</option>
                        <option value="to">TO</option>

                    </select>
                </div>

                <div class="form-group row">
                    <input class="margem" type="number" name="whatsapp" id="whatsapp" placeholder="Whatsapp" maxlength="11" required>
                </div>

                <!--<script type="text/javascript">
                    $("#whatsapp").mask("(00) 00000-0000");
                </script>-->

                <div class="form-group row">
                    <input class="btn margem-botao botao-forma" type="submit" name="cadastrar" id="cadastrar"
                        value="Cadastrar" required>
                </div>
            </form>


            <div class="row margem"><a href="login.php"><u>Login</u></a></div>

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