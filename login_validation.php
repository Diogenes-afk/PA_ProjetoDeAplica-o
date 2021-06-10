<?php
    session_start();
    $connection = mysqli_connect('localhost', 'root', '', 'projeto');

    $email = $_POST['email'];
    $pass = $_POST['senha'];

    $s = " select * from projeto.ongs where email = '$email' and senha = '$pass'";

    $result = mysqli_query($connection, $s);
    $num = mysqli_num_rows($result);

    if( $num == 1 ){
        $_SESSION['email'] = $email;
        header('location:casos-ong.php');    
    }
    else{ 
        header('location:login_fail.html');
    }

    

    

?>