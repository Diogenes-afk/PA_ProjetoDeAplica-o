<?php
    session_start();
    $connection = mysqli_connect('localhost', 'root', '', 'projeto');

    $ongname = $_POST['nomeong'];
    $email = $_POST['email'];
    $pass = $_POST['senha'];
    $city = $_POST['cidade'];
    $uf = $_POST['estado'];
    $wpp = $_POST['whatsapp'];

    $s = " select * from projeto.ongs where email = '$email'";

    $result = mysqli_query($connection, $s);
    $num = mysqli_num_rows($result);

    if( $num == 1 ){
        header('location:register_fail.html');
    }
    else{
        $reg = " insert into projeto.ongs(nome, email, senha, cidade, estado, whatsapp) values ('$ongname', '$email', $pass, '$city', '$uf', '$wpp') ";
        mysqli_query($connection, $reg);
        header('location:login.php');
    }

?>
