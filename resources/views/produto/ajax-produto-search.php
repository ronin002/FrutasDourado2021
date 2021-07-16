<?php
header('Content-type: application/json');
require_once('../conexao.php');



$conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possível conectar');


$queryString = filter_input(INPUT_SERVER, 'QUERY_STRING');
 

parse_str($queryString, $parseQueryString);
 
$termo = $parseQueryString['termo'];

//$sql = "SELECT * FROM tb_produtos WHERE id = " . $id;
$sql = "SELECT * FROM tb_ncm WHERE descricao LIKE '%".$termo."%' ORDER BY id ASC LIMIT 20";
    
//echo $sql;


$result = $conexao->query($sql);     
if (!$result) {
  printf("Query failed: %s\n", $mysqli->error);
  exit;
}      


$i = 0;
$json_in = array();
$myArray = array();
$tempArray = array();


while ($row = $result->fetch_object()) {
    $tempArray = $row;
    array_push($myArray, $tempArray);
}
echo json_encode($myArray);



?>