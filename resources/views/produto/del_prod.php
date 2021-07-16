<?php
// Include config file

session_start();
include('../verifica_login.php');

require_once "../conexao.php";
 
//$queryString = filter_input(INPUT_SERVER, 'QUERY_STRING');
 

//parse_str($queryString, $parseQueryString);
 

//echo $parseQueryString['id'];

$id = mysqli_real_escape_string($conexao,$_POST['hId']);

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    
   
        $sql = "DELETE FROM tb_produtos WHERE id = {$id}";
        echo $sql;

        if ($conexao->query($sql) === TRUE) {
            //echo "New record created successfully";
            header ('Location: list_prod_page.php');
          } else {
            echo "Error: " . $sql . "<br>" . $conexao->error;
          }

        //$result = mysqli_query($conexao, $sql);

        //echo $result;

    // Close connection
    //mysqli_close($conexao);
}

//echo "opa";

?>