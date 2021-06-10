<?php
    session_start();
    include("./conection.php");
   
?>
<!DOCTYPE html>
<html>

<head>
    <title>Paw Heroes - Casos</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/style-casos.css">
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
            <span>Paw Heroes - Casos</span>
        </p>

        <div>
        <a href="login.php"><button class ="btn opcao" value="Voltar">Voltar</button></a>
        </div>
    </nav>


    <div class="box">

    <?php 
    $consulta = $banco->prepare("select i.titulo, i.valor, i.descricao, o.nome, o.whatsapp, o.email from incidents i join ongs o where i.ong = o.email;");
    $consulta->execute();
    $linhas = $consulta->fetchAll(PDO::FETCH_OBJ);



    foreach($linhas as $func)
    {
        echo(
            '<div style="width: 600px;
            height: 300px;
            background-color: #f7aec6;
            color: black;
            margin: 20px;
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            font-size: 18px;
            border-style: none;
            box-shadow: inset 0 0 1em transparent, 0 0 1em black;
            display: inline-block;
            position: relative;
            ">
            <p><b>ONG:</b> '.$func->nome.'</p>
            <p><b>Caso:</b> '.$func->titulo.'</p>
            <p><b>Valor:</b> R$'.$func->valor.'</p>
            <p><b>Descrição:<br></b><textarea cols="50"
            style="border-radius:5px; 
            resize: none; 
            outline: none;
            border-style:none;
            background-color: #f7aec6";
            disabled> '.$func->descricao.'</textarea></p>

            <div class="row">
            <div class="col">
                <button type="button" class="btn" style ="border-radius: 10px;
                background-color: #ff0055;
                color: white;
                margin-top: auto;"><a style="color: white;" href=" https://wa.me/+55'.$func->whatsapp.'" target="_blank">Entrar em contato via Whatsapp</a></button>
            </div>
            <div class="col">
            <button type="button" class="btn" style ="border-radius: 10px;
            background-color: #ff0055;
            color: white;
            margin-top: auto;"><a style="color: white;" href="mailto:'.$func->email.'?subject=Paw Heroes - Quero ajudar" target="_blank">Entrar em contato via email</a></button>
            </div>
        </div>
            
        </div>');
        
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
        crossorigin="anonymous"></script>



</body>

</html>