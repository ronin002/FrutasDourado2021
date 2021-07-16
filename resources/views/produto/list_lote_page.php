<!-- <php
	session_start();
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/conexao.php';

    include('../verifica_login.php');
    //require_once('../database/db_functions.php');
	$produtos = findLoteCliente();

?> -->
<!DOCTYPE html>
<html>
<!-- <php

	include_once ('../administrativo.php');

	function fncAtualizar (){
		$produtos = findLoteCliente();
	}

?> -->


<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Lotes</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="../produtos/cad_lote_page.php"><!-- <i class="fa fa-plus"></i> --> Novo Lote</a>
	    	<a class="btn btn-info" href="?fncAtualizar"><!-- <i class="fa fa-refresh"></i> --> Atualizar</a>
	    </div>
	</div>

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


	
	<link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
</header>


<!-- <hr> -->

<table class="table table-hover">
<thead>
	<tr>
		<th style="text-align:left;width:50px;">Lote</th>
		<th style="text-align:left;width:250px;">Descrição</th>
        <th style="text-align:left;width:70px;">Quantidade</th>
		<th style="text-align:left;width:70px;">Unidade</th>
		<th style="text-align:left;width:70px;">NCM</th>
		<th style="text-align:left;width:70px;">GTIN</th>
        <th style="text-align:left;width:70px;">Origem</th>
		<th style="text-align:left;width:150px;">Origem declarada</th>
        <th style="text-align:left;width:150px;">Distribuidor</th>
	</tr>
</thead>
<tbody>
	<?php if ($produtos) : ?>
	<?php foreach ($produtos as $produto) : ?>
		<tr>

			<td style="text-align:left !important;">
				<input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
				<input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']; ?>">
				<?php echo $produto['Lote']; ?> 
			</td>
			<td style="text-align:left !important;"><?php echo $produto['descricao']; ?></td>
			<td style="text-align:left !important;"><?php echo $produto['quantidade']; ?></td>
			<td style="text-align:left !important;"> <?php echo $produto['unidade']; ?></td>
			<td style="text-align:left !important;"><?php echo $produto['NCM']; ?></td>
			<td style="text-align:left !important;"><?php echo $produto['GTIN']; ?></td>
			<td style="text-align:left !important;"><?php echo $produto['origem']; ?></td>
			<td style="text-align:left !important;"><?php echo $produto['origem_declarada']; ?></td>
			<td style="text-align:left !important;"><?php echo $produto['distribuidor']; ?></td>
			
			<?php if ($produto['etiqueta_gerada'] == 1) : ?>
			
				<td class="actions text-right" style="width:50px;">
					<!-- <a href="view.php?id=<php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a> -->
					<label class="btn btn-sm btn-secondary" onclick="sub_edit()">
						<i class="fa fa-pencil"></i> Editar
					</label>
					
				</td>
				<td style="width:50px;" placeholder="Após impressão não é possível excluir" >
					<form action="../produtos/del_lote.php" method="post">
						<!-- <a href='del_prod.php ?>' class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<php echo $produto['id']; ?>" onclick="fncDelete(<php echo $produto['id']; ?>);">
						<i class="fa fa-trash"></i> Excluir 
						</a>-->
						<input type="hidden"  name="hId" id="hId" value="<?php echo $produto['id']; ?>"/>

						<label type="submit" class="btn btn-sm btn-secondary" onclick="sub_edit()">
							<i class="glyphicon glyphicon-align-left"  ></i>Excluir
						</label>
						
					</form>
				</td>
			<?php else : ?>
				<td class="actions text-right" style="width:50px;">
					<!-- <a href="view.php?id=<php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a> -->
					<a href="edit_lote_page.php?id=<?php echo $produto['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
					
				</td>
				<td style="width:50px;" placeholder="Após impressão não é possível excluir" >
					<form action="../produtos/del_lote.php" method="post">
						<!-- <a href='del_prod.php ?>' class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<php echo $produto['id']; ?>" onclick="fncDelete(<php echo $produto['id']; ?>);">
						<i class="fa fa-trash"></i> Excluir 
						</a>-->
						<input type="hidden"  name="hId" id="hId" value="<?php echo $produto['id']; ?>"/>

						<button type="submit" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-align-left"  ></i>Excluir</button>
						
						btn-secondary
						
					</form>
				</td>
			<?php endif; ?>
			<td class="actions text-right" style="width:50px;">
				<!-- <a href="view.php?id=<php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a> -->
				<i class="fa fa-pencil"></i> <a href="lote_list_page.php?id=<?php echo $produto['id']; ?>" class="btn btn-info"> Etiqueta QRCode </a>
				
			</td>
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

<script>
	function sub_edit(){
		alert("Este lote não pode ser editado por já ter sido criado QR-CODE de rastreamento!");
	}
</script>

