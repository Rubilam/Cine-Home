<?php 
    session_start();
    //print_r($_REQUEST);
   
    if(isset($_POST['submit']) && !empty($_POST['email'])  && !empty($_POST['senha']))
    {
        //Acessa
        include_once('../config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // echo 'Email: ' . $email . '<br>';
        // echo 'Senha: ' . $senha . '<br>';

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if (mysqli_num_rows($result) < 1) {
            // print_r('nao existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');

            
        }else{
            // print_r('existe');
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }

    }
    else{
        //Nao acessa
        // header('Location: login.php');
        print('ERROR');
    }

?>