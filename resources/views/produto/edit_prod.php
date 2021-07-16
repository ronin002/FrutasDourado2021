<?php
// Include config file

session_start();
include('../verifica_login.php');

require_once "../conexao.php";
 
$id = mysqli_real_escape_string($conexao,$_POST['id']);
$descricao = mysqli_real_escape_string($conexao,$_POST['descricao']);
$NCM = mysqli_real_escape_string($conexao,$_POST['NCM']);
$GTIN = mysqli_real_escape_string($conexao,$_POST['GTIN']);
$tipo = mysqli_real_escape_string($conexao,$_POST['tipo']);
$unidade = mysqli_real_escape_string($conexao,$_POST['unidade']);

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$descricao_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    echo 'edit';
    
    // Validate username
    if(empty(trim($_POST["descricao"]))){
        $descricao_err = "Por favor informe a descrição.";
    } 
    
    // Validate password
    // if(empty(trim($_POST["senha"]))){
    //     $password_err = "Please enter a password.";     
    // } elseif(strlen(trim($_POST["senha"])) < 6){
    //     $password_err = "Password must have atleast 6 characters.";
    // } else{
    //     $password = trim($_POST["senha"]);
    // }
    
    // Validate confirm password
    // if(empty(trim($_POST["senha2"]))){
    //     $confirm_password_err = "Please confirm password.";     
    // } else{
    //     $confirm_password = trim($_POST["senha2"]);
    //     if(empty($password_err) && ($password != $confirm_password)){
    //         $confirm_password_err = "Password did not match.";
    //     }
    // }
    
    //echo "username_err" . $username_err;
    //echo "password_err" . $password_err;
    //echo "confirm_password_err" . $confirm_password_err;
    // Check input errors before inserting in database
    if(empty($descricao_err)){ // && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        //$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
 
        $sql = "UPDATE tb_produtos SET descricao = '{$descricao}', NCM = '{$NCM}', GTIN = '{$GTIN}', tipo='{$tipo}', unidade = '{$unidade}' WHERE id = '{$id}'";
        echo $sql;

        if ($conexao->query($sql) === TRUE) {
            //echo "New record created successfully";
            header ('Location: list_prod_page.php');
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