
<!DOCTYPE html>
<html>
@include('_partials.menu')


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=charset=iso-8859-1">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frutas Dourado - Cadastro de Produtos</title>
    <link href="https:fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		<!-- jQuery -->
	
		<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	
		<link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
		<script src="https:code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<script>

	function sAcentos(valor){
		//"á = \u00e1",
		acentos = ["á = u00e1",
					"à = u00e0",
					"â = u00e2",
					"ã = u00e3",
					"ä = u00e4",
					"Á = u00c1",
					"À = u00c0",
					"Â = u00c2",
					"Ã = u00c3",
					"Ä = u00c4",
					"é = u00e9",
					"è = u00e8",
					"ê = u00ea",
					"ê = u00ea",
					"É = u00c9",
					"È = u00c8",
					"Ê = u00ca",
					"Ë = u00cb",
					"í = u00ed",
					"ì = u00ec",
					"î = u00ee",
					"ï = u00ef",
					"Í = u00cd",
					"Ì = u00cc",
					"Î = u00ce",
					"Ï = u00cf",
					"ó = u00f3",
					"ò = u00f2",
					"ô = u00f4",
					"õ = u00f5",
					"ö = u00f6",
					"Ó = u00d3",
					"Ò = u00d2",
					"Ô = u00d4",
					"Õ = u00d5",
					"Ö = u00d6",
					"ú = u00fa",
					"ù = u00f9",
					"û = u00fb",
					"ü = u00fc",
					"Ú = u00da",
					"Ù = u00d9",
					"Û = u00db",
					"ç = u00e7",
					"Ç = u00c7",
					"ñ = u00f1",
					"Ñ = u00d1",
					"& = u0026",
					"' = u0027"
								]
							
		var arrayLength = acentos.length;
		let retorno = "";
		for (var i = 0; i < arrayLength; i++) {

			let acento = acentos[i];
			acento = acento.replace("= ","= \\");
			//valor = valor.replace("\\","");
			acento = acento.substr(acento.length - 6);
			//console.log(acento + "-" + valor);

			if (valor.indexOf(acento)>=0){
				retorno = acentos[i].substring(0,1);
				//console.log("retorno" + retorno);
				//console.log(valor + "-" + valor.replace(acento,retorno));
				return  valor.replace(acento,retorno) ;
			}

			//Do something
		}

		return valor;

	}

	function httpGet(theUrl)
	{
		var xmlHttp = new XMLHttpRequest();
		xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
		xmlHttp.setRequestHeader("charset", "UTF-8");
		xmlHttp.send( null );
		return xmlHttp.responseText;
	}

	function populaTipo(ur){

		let id_cliente = 1;

		var url = '{{ route("tipo.show", ":id_cliente") }}';

		//console.log(ur);
		//console.log(url);
		
		url = url.replace('?', '/');
		url = url.replace(':id_cliente',  ur);
		//console.log(url);

		// fetch(url).then(function(response) {
		// 	console.log(response);
		// 	return response.json();
		// }).then(function(data) {
		// 	console.log(data);
		// }).catch(function() {
		// 	console.log("Booo");
		// });
		
		let sFruta = httpGet(url);
		sFruta = sFruta.replace("{\"descricao\":\"","");
		sFruta = sFruta.replace("\"}","");
		//console.log(sFruta);
		
		sFruta = sAcentos(sFruta);
		//console.log(sFruta);

		// var client = new HttpClient();
		// 	client.get(url, function(response) {
		// 		alert(response);
    	// 	// do something with response
		// });

		return sFruta;
		
		
	}


	function phpTeste(valor){
		//console.log(valor);
		//console.log(populaTipo(valor));
		let b= populaTipo(valor);
		//b=iconv("windows-1250","UTF-8",$b);
		//console.log(b);
		//alert(b);

		document.write(b);
		return b;
		//alert(valor);
	}
</script>

<header>

	<div class="row">
		<div class="col-sm-6">
			<h2>Produtos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href={{route('produto.create')}}><!-- "../produtos/cad_produto_page.php"> <i class="fa fa-plus"></i> -->  Novo Produto</a>
	    	<a class="btn btn-info" href="?fncAtualizar"><!-- <i class="fa fa-refresh"></i> --> Atualizar</a>
	    </div>

		
	</div>

	@if (session('message'))

		<span>{{session('message')}}</span>

	@endif

	
	<link href="../css/bootstrap.min.css" rel="stylesheet"  type='text/css'>
</header>

<hr>

<form action="{{ route('produto.search') }}" method="post">
	@csrf
	<input type="text" name="search" id="search" placeholder="Pesquisar:">
	<button class="btn btn-info" type="submit" value="Pesquisar">Pesquisar</button>
</form>

<table class="table table-hover">
	<thead>
		<tr>
			<th style="text-align:left;width:50px;">ID</th>
			<th style="text-align:left;width:250px;">Descrição</th>
			<th style="text-align:left;width:100px;">Unidade</th>
			<th style="text-align:left;width:150px;">NCM</th>
			<th style="text-align:left;width:100px;">GTIN</th>
			<th style="text-align:left;width:100px;">Tipo</th>
		</tr>
	</thead>
<tbody>

<?php if ($produtos) : ?>
<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td style="text-align:left !important;"><?php echo $produto['id']; ?></td>
		<td style="text-align:left !important;"><?php echo $produto['descricao']; ?></td>
		<td style="text-align:left !important;"><?php echo $produto['unidade']; ?></td>
		<td style="text-align:left !important;"><?php echo $produto['NCM']; ?></td>
		<td style="text-align:left !important;"><?php echo $produto['GTIN']; ?></td>
		<td style="text-align:left !important;"><?php echo "<script>phpTeste(" ?><?php echo $produto['Tipo'] ?><?php echo ");</script>" ?></td>
		{{-- <td style="text-align:left !important;" class="rotaTipo" data-url="{{ route('tipo.show',$produto['Tipo']) }}" ><php echo $produto['TIPO']; ?></td> --}}
		{{-- <td style="text-align:left !important;">{{ route('tipo.show',$produto['Tipo']) }}</td> --}}
		{{-- <td style="text-align:left !important;"><php echo retornaFruta($produto['Tipo']) ?></td> --}}
		
		<td class="actions text-right" style="width:50px;">
			<!-- <a href="view.php?id=<php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a> -->
			<a href="{{ route('produto.edit', $produto['id']) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
		</td>
		<td style="width:50px;">
			<form action="../produtos/del_prod.php" method="post">
				<!-- <a href='del_prod.php ?>' class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<php echo $produto['id']; ?>" onclick="fncDelete(<php echo $produto['id']; ?>);">
				<i class="fa fa-trash"></i> Excluir 
				</a>-->
				<input type="hidden"  name="hId" id="hId" value="<?php echo $produto['id']; ?>"/>
				<button type="submit" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-align-left"></i>Excluir</button>
			</form>
		</td>
		<td class="actions text-right" style="width:50px;">
			<!-- <a href="view.php?id=<php echo $produto['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a> -->
			<i class="fa fa-pencil"></i> <a href="list_lote_page.php?id=<?php echo $produto['id']; ?>" class="btn btn-info"> Lotes </a>
			
		</td>
	</tr>
<?php endforeach; ?>
<hr>
@if (isset($filters))
	{{ $produtos->appends($filters)->links() }}
@else
	{{ $produtos->links() }}
@endif

<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?> 
</table>

<script>

	// function phpTeste(valor){
	// 	alert(valor);
	// }

	

    $(document).ready(function(){

		
		$('.rotaTipo').each(function(i, obj) {
			console.log(obj);
			var ur1 = $(obj).attr('data-ncm_id');
			console.log(ur1);
			populaTipo(ur1);
			obj.innerHtml = data;
			//test
		});

	});

</script>



