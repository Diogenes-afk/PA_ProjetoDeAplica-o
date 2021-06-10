<?php
    session_start();
    $connection = mysqli_connect('localhost', 'root', '', 'projeto');

    $titulo = $_POST['caso'];
    $desc = $_POST['descricao'];
    $valor = $_POST['valor'];
    $ong = $_SESSION['email'];
    



    $reg = " insert into projeto.incidents(titulo, descricao, valor, ong) values ('$titulo', '$desc', '$valor', '$ong') ";
    mysqli_query($connection, $reg);
    header('location:casos-ong.php');
    

?>
