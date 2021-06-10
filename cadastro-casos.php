<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Paw Heroes - Cadastro de Casos</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style-cadastro-caso.css">
    <link rel="icon" href="image/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <!--icone do site-->
    <nav class="navbar navbar-dark nav-cor">
        <p class="navbar-brand" href="#">
            <img src="image/app-icon2.png" class="d-inline-block align-top img-icone" alt="Paw Heroes">
            <span>Paw Heroes - Cadastro de Casos</span>
        </p>

        <div>
        <a href="casos-ong.php"><button class ="btn opcao" value="Voltar">Voltar</button></a>
        </div>
    </nav>


    <!--Inicio do Formulário de Cadastro nome, cidade estado whatsapp-->
    <div>
        <div class="box">
            <form action="create_incident.php" method="POST" class="form-control-lg form-login">
                <div class="form-group row">
                    <input class="margem" type="text" name="caso" id="caso" placeholder="Caso" required>
                </div>
                <div class="form-group row">
                    <input class="margem" type="text" name="valor" id="valor" placeholder="Valor" required>
                </div>
                <br>
                <div class="form-group row">
                    <div class="">
                        <textarea placeholder=" Descrição" id="descricao" name="descricao"
                            style="height: 150px;width: 240px;font-size: 20px;" required></textarea>

                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="mascaras/dist/jquery.maskMoney.min.js"></script>
                <script>
                    $("#valor").maskMoney({ prefix: 'R$ ', allowNegative: true, thousands: '.', decimal: ',', affixesStay: false });
                </script>

                <div class="form-group row">
                    <input class="btn margem-botao botao-forma" type="submit" name="cadastrar-caso" id="cadastrar-caso"
                        value="Cadastrar caso">
                </div>
            </form>



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