<? 
session_start();
include ('conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])){
    header ('Location: login_cliente.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$senha_crypt =hash("sha256", $senha);

$query = "SELECT id, username FROM users WHERE username = '{$usuario}' AND password = '{$senha_crypt}'";

//echo $query;

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

//echo $row;

if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: administrativo.php');
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login_cliente.php');
    exit();
}


?>
