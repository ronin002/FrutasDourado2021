
<!DOCTYPE html>
<html>



<header>

    <? 
        include_once $_SERVER['DOCUMENT_ROOT'].'/menu.php';
    ?>

	<!-- <script>
		function fncDelete(id1) {
			var txt;
			var r = confirm("Confirma exclusão do produto (caso exista algum lote cadastrado não será possível a exclusão)?");
			if (r == true) {
				//window.location="../produtos/del_prod.php?id="+ id1;

				jQuery.ajax({
					type: "POST",
					url: '../produtos/del_prod.php',
					dataType: 'json',
					data: {id: id1},

					success: function (obj, textstatus) {
								if( !('error' in obj) ) {
									yourVariable = obj.result;
								}
								else {
									console.log(obj.error);
								}
							}
				});

				return true;
			} else {
				//txt = "You pressed Cancel!";
			}
			//alert(txt);
			//document.getElementById("demo").innerHTML = txt;
			}
	</script> -->


	
	<link href="../fonts/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</header>

<!-- <php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<php echo $_SESSION['message']; ?>
	</div>
	<php clear_messages(); ?>
<php endif; ?> -->

<hr>

<div class="row">
    <!-- <div class="col-sm-2">
        <h4>NCM</h4>
    </div>
    <div class="col-sm-2 text-left h4">
        <input type="text" id="txtBusca" style="width:250px;"/>
    
    </div>
    <div class="col-sm-2 text-right h4">
        <a class="btn btn-primary" href="cad_produto_page.php"><span class="flaticon-loupe"></span> Pesquisar </a>
        
    </div> -->
    <form class="form-inline" method="GET" action="../ncm_busca_result.php">
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
    <?php if ($produtos) : ?>
    <?php foreach ($produtos as $produto) : ?>
        <tr>
        
            <td style="text-align:left !important;"><?php echo $produto['descricao']; ?></td>
            
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

