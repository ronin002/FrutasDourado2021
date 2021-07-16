<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    echo "6";

    require_once $_SERVER['DOCUMENT_ROOT'].'/conexao.php';
    

    $usuario = mysqli_real_escape_string($conexao,$_POST['destinatario']);

    echo "usuario". $usuario;
    // Processing form data when form is submitted

    
    function generateRandomString($length = 30) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $recoveryCode = generateRandomString();    

    echo "recoveryCode" . $recoveryCode ."</br>";
    
    // Validate username
    if(empty(trim($_POST["destinatario"]))){
        echo "NAO ACHOU DESTINATARIO";
        //header ('Location: ../login/login_cliente.php');
        //exit();
    } else{
        // Prepare a select statement
        $sql = "SELECT email FROM tb_clientes WHERE email = '{$usuario}'";

        echo "sql" . $sql ."</br>";
        //$query = "SELECT id, username FROM users WHERE username = '{$usuario}'";

        $result = mysqli_query($conexao, $sql);

        $row = mysqli_num_rows($result);

        if($row >= 1){

            $sql = "UPDATE tb_clientes SET recuperar = '".$recoveryCode."' WHERE email = '{$usuario}'";

            echo "sql2 - " . $sql ."</br>";

            $result = mysqli_query($conexao, $sql);


                    

            $to = $_POST["destinatario"]; // "somebody@example.com";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $subject =  "Frutas Dourado - Recuperação de senha"; //$_POST["Titulo"]; //"My subject";
            //$txt = // $_POST["email"] . "   ---   " . $_POST["Texto"]; //"Hello world!";
            $message = "
            <html>
            <head>
            <title>Frutas Dourado</title>
            </head>
            <body>
            <p>Prezado,
            
            
            Você solicitou a recuperação da sua senha.
            
            Clique no link para recuperar a sua senha!


            IMPORTANTE:
            Caso você não tenha requerido a recuperação de senha, desconsidere este e-mail!

            <a href='https://www.frutasdourado.com.br/recovery_by_mail.php?code=
            ".
            $recoveryCode."'>
            https://www.frutasdourado.com.br/recovery_by_mail.php?code=$recoveryCode
            </a>
            </p>
            <br>
            <br>
            <p>
            


            Atenciosamente,

            Frutas Dourado - Soluções de rastreamento para o homem do campo.
            </p>
            ";

            $headers .= "From: " . "recovery@frutasdourado.com.br" . "\r\n" ; //"CC: somebodyelse@example.com"; //"From: webmaster@example.com" . "\r\n" . //"CC: somebodyelse@example.com";

            mail($to,$subject,$message,$headers);





            

          

        } else{

         
        }

        //header ('Location: ../login/login_cliente.php');
        exit();
    }
    
    





}

?> 