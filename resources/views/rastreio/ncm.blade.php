
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<html>



<header>

    <? 

        require_once $_SERVER['DOCUMENT_ROOT'].'/conexao.php';
        include_once $_SERVER['DOCUMENT_ROOT'].'/menu.php';

        setlocale(LC_ALL,'pt_BR.UTF8');
        mb_internal_encoding('UTF8'); 
        mb_regex_encoding('UTF8');
        header('Content-Type: text/html; charset=UTF-8');
        $descr = $_GET['pesq_ncm'];
 
        // Processing form data when form is submitted
       
            if($descr){ // && empty($password_err) && empty($confirm_password_err)){
                
                // Prepare an insert statement
                //$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        
                $sql = "SELECT * FROM tb_ncm WHERE descricao LIKE '%" . $descr . "%'";
                //echo $sql;

                if ($conexao->query($sql) === TRUE) {
                    //echo "New record created successfully";
                    //header ('Location: list_prod_page.php');
                } else {
                    //echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $result = mysqli_query($conexao, $sql);

                //echo $result;

            }

        
    ?>

	

	
	<link href="../fonts/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</header>

<hr>

<div class="row">
   
    <form class="form-inline" method="GET" action="../ncm.php">
        <div class="form-group">
            <label for="exampleInputName2" style="width:250px;">Descrição / NCM</label> 
            <input type="text" name="pesq_ncm" class="form-control " id="exampleInputName2" placeholder="">
        </div>
      
        <button type="submit" style="margin-left: 20px;" class="btn btn-default btn btn-primary">Pesquisar</button>
    </form>
</div>
<br/>


<div class="row">
    <div class="col-sm-6">
        <h5>Lista de Resultados</h5>
    </div>
    <!-- <div class="col-sm-6 text-right h2">
        <a class="btn btn-primary" href="cad_produto_page.php"><i class="fa fa-plus"></i> Novo Protudo</a>
        <a class="btn btn-default" href="?fncAtualizar"><i class="fa fa-refresh"></i> Atualizar</a>
    </div> -->
</div>

<table class="table table-hover">
    <thead>
        <tr>

            <th style="text-align:left;width:450px;">NCM</th>
        
        </tr>
    </thead>
    <tbody>
    <?php if ($result) : ?>
    <?php foreach ($result as $result1) : ?>
        <tr>
        
            <td style="text-align:left !important;"><?php echo htmlspecialchars($result1['descricao'], ENT_COMPAT,'ISO-8859-1', true);  ?></td>
            
        </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>


<?php include_once('../footer.php'); ?>

