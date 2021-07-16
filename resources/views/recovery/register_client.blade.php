<?php
// Include config file
session_start();
//include('../verifica_login.php');
require_once $_SERVER['DOCUMENT_ROOT'].'/conexao.php';
 

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$senha2 = mysqli_real_escape_string($conexao,$_POST['senha2']);
$pais = mysqli_real_escape_string($conexao,$_POST['pais']);
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //echo "ok";
    
    // Validate username
    if(empty(trim($_POST["usuario"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM tb_clientes WHERE email = '{$usuario}'";

        $query = "SELECT id, email FROM tb_clientes WHERE email = '{$usuario}'";

        $result = mysqli_query($conexao, $query);

        $row = mysqli_num_rows($result);

        if($row >= 1){
            $username_err = "This username is already taken.";
            exit;
        } else{
            $username = trim($_POST["usuario"]);
        }

        
    }
    
    // Validate password
    if(empty(trim($_POST["senha"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["senha"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["senha"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["senha2"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["senha2"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    echo "username_err" . $username_err;
    echo "password_err" . $password_err;
    echo "confirm_password_err" . $confirm_password_err;
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        //$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $senha_crypt =hash("sha256", $senha);
        $sql = "INSERT INTO tb_clientes (email, senha, pais) VALUES ('{$usuario}', '{$senha_crypt}', '{$pais}' )";
        echo $sql;

        if ($conexao->query($sql) === TRUE) {
            header("location: ../index.php");
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        $result = mysqli_query($conexao, $sql);

        echo $result;

    }
    
    // Close connection
    //mysqli_close($conexao);
}

//echo "opa";

?>
