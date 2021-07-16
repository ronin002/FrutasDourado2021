<!DOCTYPE html>
<html>
    @include('_partials.menu')
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frutas Dourado - Cadastro de Produtos</title>
    <link href="https:fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
 
    
	<!-- jQuery -->
	
	<script src="https:ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	
	<link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="https:code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    <!-- <script src='../js/jquery-3.1.1.min.js' type='text/javascript'></script>

     jQuery UI 
    <link href='../css/jquery-ui.min.css' rel='stylesheet' type='text/css'>
    <script src='../js/jquery-ui.min.js' type='text/javascript'></script> -->

    <style>
        * { box-sizing: border-box; }
        body {
        font: 16px Arial;
        }
        /* .autocomplete {
        /*the container must be positioned relative:
        position: relative;
        display: inline-block;
        } */
        input {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
        }
        input[type=text] {
        background-color: #f1f1f1;
        width: 100%;
        }
        input[type=submit] {
        background-color: DodgerBlue;
        color: #fff;
        }

        /* .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        /*position the autocomplete items to be the same width as the container:
        top: 100%;
        left: 0;
        right: 0;
        }
        .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
        }
        .autocomplete-items div:hover {
            /*when hovering an item:
            background-color: #e9e9e9;
        }
        .autocomplete-active {
            /*when navigating through the items using the arrow keys:
            background-color: DodgerBlue !important;
            color: #ffffff;
        } */

        #friendsoptionstable {
            table-layout: fixed;
            word-wrap: break-word;
        }
    </style>
        
    {{-- <script type="text/javascript" src="../produtos/produtos.js"></script> --}}
    {{-- <link href="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet"/> --}}


    {{-- <script src="cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.js"></script> --}}

    <link rel="stylesheet" href="https:maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https:maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

{{-- <php 

    if (cout($produtos)>=0){

        $produto['id']
		$produto['descricao']
		$produto['unidade']
		$produto['NCM']
		$produto['GTIN']

    }

?> --}}
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <h3 class="title has-text-grey">Cadastro de Produtos</h3>
                   
                    <div class="box">

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{$error}}</li>  
                                @endforeach
                                
                            </ul>

                        @endif
                        <form action={{ route('produto.save')}}  method="POST">
                            {{-- <input type="hidden" name="_token" value="{{ csrf_token }}"> --}}
                            @csrf<!-- csrf Cria um token automaticamente com o Laravel -->
                             <!-- area de campos do form -->
                            <hr />
                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="campo2" style="font-style: italic;">NCM</label>
                                    
                                    <div class="form-group layout-form-group form-group">
                                        
                                        <input  placeholder="Código NCM" id="ncm" class="numbersOnly"  name="ncm" type="text"  value="<?php echo (isset($produto['NCM']))?$produto['NCM']:'';?>" >
                                    </div>{{-- <img id="imgBuscaNCM" class="position-absolute" src="../images/busca_db.png" style="height:1.5rem;width:1.5rem;top:50%;right:0;cursor:pointer;transform:translate(-0.625rem, -50%)" /> --}}

                                </div>

                               
                                

                                <div class="form-group col-md-2">
                                    <label for="campo3"></label>
                                    <img id="imgBuscaNCM" class="position-absolute" src="../images/search.png" style="height:1.5rem;width:1.5rem;top:45%;right:10%;cursor:pointer;" />
                                <!-- <input type="text" class="form-control" name="customer['birthdate']"> -->
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-md-3">
                                    <label for="name" style="font-style: italic;">Descrição NCM</label>
                                    <div class="autocomplete" style="width:400px;">
                                        <input type="text" class="form-control" id="descricao_ncm" name="descricao_ncm" value="{{ old('ncm') }}"  />
                                        <input type="hidden" id="id_ncm" name="id_ncm">
                                    </div>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="campo3"></label>
                                    {{-- <img id="imgBuscaNCM_Descr" class="position-absolute" src="../images/search.png" style="height:1.5rem;width:1.5rem;top:45%;right:10%;cursor:pointer;" /> --}}
                                </div>
                               
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-7">
                                    <label for="name">Descrição Produto <span style="font-style: italic;">    Ex: Banana prata</span></label>
                                    <input type="text" class="form-control" name="descricao" id="descricao" value="{{ old('descricao') }}"/>
                                    {{-- //INSERIR_CLIENTE --}}
                                    <input type="hidden" id="id_cliente" name="id_cliente" value="1">
                                    {{-- <span>Exemplo: Se o produto for banana no NCM você pode descrever</span> --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-5">
                                    <label for="campo1">GTIN  <span style="font-style: italic;">  Apenas exportação</span></label>
                                    <input type="text" class="form-control" name="gtin" id="gtin" value="{{ old('gtin') }}">
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="campo2">Tipo</label>
                                    <!-- <input type="text" class="form-control" name="customer['hood']"> -->
                                    <select class="form-control" id="tipo" name="tipo" placeholder="Tipo Produto" value="{{ old('tipo') }}">
                                        {{-- <option value="Fruta">Fruta</option>
                                        <option value="Verdura">Verdura</option>
                                        <option value="Legume">Legume</option> --}}
                                        
                                        
                                    </select>

                                    
                                </div>

                                <div class="form-group col-md-2">
                                    <img id="imgBuscaAddTipo" class="position-absolute" src="../images/plus.png" style="height:1.5rem;width:1.5rem;top:45%;" />
                                </div>

                            </div>
                            
                            
                          
                            
                            <div id="actions" class="row">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href={{ route('produto.index')}} class="btn btn-default">Cancelar</a>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div id="dvPopupStatus" class="popup" data-popup="popup-dadosStatus">

        <div id="dvPopupDadosStatus" class="popup-inner">

            <div class="row">
                <div class="form-group col-sm-6">
                    {{-- <label for="exampleInputName2" style="width:250px;">Pesquisar</label>  --}}
                    <input type="text" name="search" class="form-control " id="search" placeholder="Pesquisar">
                </div>
        
                <button class="btn btn-info" id="btnPesquisarNCM" value="Pesquisar">Pesquisar</button>
        
                <button style="margin-left: 20px;" id="btnFechaStatusModal" class="btn btn-warning">Fechar</button>
            
                <div class="row">
    
                    
                </div>
            </div>
            <br/>
            
            
            <div class="row">
                <div class="col-sm-6">
                    <h5>Lista de Resultados</h5>
                </div>
               
            </div>
            
            
            
            <div id="ToDisplayResultStatus">
            
           

            </div> 



        </div>


    </div>





    <div id="dvPopupTipo" class="popup" data-popup="popup-dadosTipo">

        <div id="dvPopupDadosTipo" class="popup-inner">

            <div class="row">
                <div class="form-group col-sm-6">
                    {{-- <label for="exampleInputName2" style="width:250px;">Pesquisar</label>  --}}
                    <input type="text" name="id_tipo" class="form-control " id="id_tipo" placeholder="Inserir tipo">
                </div>
        
                <button class="btn btn-info" id="btnAddTipo" value="Salvar">Salvar</button>
        
                <button style="margin-left: 20px;" id="btnFechaTipoModal" class="btn btn-warning">Fechar</button>
            
                <div class="row">
    
                    
                </div>
            </div>
            <br/>
            
            
            <div class="row">
                <div class="col-sm-6">
                    <h5>Lista </h5>
                </div>
               
            </div>
            
            
            
            <div id="ToDisplayResultTipo">
            
           

            </div> 



        </div>


    </div>










    <br>
    <br>
    <br>
    <hr />
   
    
</body>


</html>

<script>



$(document).ready(function(){



    function fncSelecionaNCM(valor){
        console.log('SELECIONADO:' + valor);

    }

    function subMostraBuscaNCM(valor){
        
        if (valor.length >=4){
            //console.log('mais que 4' + valor);
                        
            //$('#ToDisplayResultStatus').load('./ncm/getNCMs/?search='+valor);
            var url = '{{ route("ncm.getNCMs", ":search") }}';
            
            url = url.replace('?', '/?');
            url = url.replace(':search', 'search=' + valor);
            //console.log('url:' + url);
            
            let v_csrf = "{{ csrf_token() }}";
            //console.log('v_csrf:' + v_csrf);

            $.ajax({ 
                  url: url,//"{{route('ncm.getNCMs')}}",
                  type: 'post',
                  dataType: "json",
                   data: {
                   "_token": "{{ csrf_token() }}",
                   "search": valor
                   },
                  success: function( data ) {
                      //console.log("Response:" + data);
                      //response( data );
                      var data1 =JSON.stringify(data); 
                      //console.log("Response:" + data1);

                      var html = '<style>tr:nth-child(odd){background-color: #f5f5f5;} thead>tr{background-color: #ec971f;}</style>';
                            html += '<table id ="friendsoptionstable">' ;// class="table table-bordered has-warning">';

                            html += '<thead>'
                            html += '<tr> <th class="tablecell" width: "auto !important" style="display:none;">NCM</th>';
                            html += '<th class="tablecell" width: "auto !important">Descrição</th>';
                            html += '<th class="tablecell" style="display:none;">Categoria</th>';
                            html += '<th class="tablecell" style="display:none;">Un. Trib.</th>';
                            html += '<th class="tablecell" style="display:none;">Descr. Trib.</th>';
                            html += '<th class="tablecell">Selecionar</th>';
                            html += '</tr></thead>';

                            html += '<tbody>';
                            //html += '<tr><td>NCM</td><td>Descrição</td><td>Categoria</td><td>Un. Trib.</td><td>Descr. Trib.</td></tr>';
                            for (var i = 0; i < data.length; i++) {
                                
                                html += '<tr><td style="display:none;">' + data[i].id + '</td><td>' + data[i].descricao + '</td><td style="display:none;">' + data[i].categoria + '</td><td style="display:none;">' + data[i].uTrib + '</td><td style="display:none;">' + data[i].DescruTrib + '</td>';

                                html += '<td class="actions text-right" style="width:50px;">';

                                html += '<img class="btnSelect" style="height:1.5rem;width:1.5rem;top:45%;right:10%;cursor:pointer;" src="../images/checked_cinza.png" data-ncm_id="' + data[i].id + '" data-ncm_descr="' + data[i].descricao + '"/>';
                                
		                        html += '</td>';

                                html += '</tr>';
                               
                            }

                            //html += '<tr><td>' + data1.id + '</td><td>' + data1.descricao + '</td><td>' + data1.categoria + '</td><td>' + data1.uTrib + '</td><td>' + data1.DescruTrib + '</td></tr>';
                            html += '</tbody>';
                            html += '</table>';


                      $('#ToDisplayResultStatus').html(html);
                
                  },
                  error: function (xhr, ajaxOptions, thrownError) {
                      alert(xhr.status);
                      alert(thrownError);
                      console.log('status' + xhr.status);
                      console.log('thrownError' + thrownError);
                  }
            });

            

            $("#dvPopupStatus").hide().fadeIn(350);
        } 
        else{
            alert('A busca deve ter pelo menos 4 caracteres');
        }

    }
    
    // $('.btnSelect').on('click', function (e) {   
    //     console.log('btnSelect');
    // });

   
    
   

    $('#btnPesquisarNCM').on('click', function (e) {   
        let txt = document.getElementById("search").value;
        subMostraBuscaNCM(txt);
    });

    $('#imgBuscaNCM').on('click', function (e) {   
        //let txt = document.getElementById("ncm").value;
        //let txt2 = document.getElementById("descricao_ncm").value;
        //subMostraBuscaNCM(txt);
        $("#dvPopupStatus").hide().fadeIn(350);
    });

    $('#btnFechaStatusModal').on('click', function (e) {    
        $("#dvPopupStatus").hide().fadeOut(350);
     });

});  

$("body").on("click", ".btnSelect", function(){
    var ncmID = $(this).attr('data-ncm_id');
    var DescrNcm = $(this).attr('data-ncm_descr');
    //console.log('ncmID:' + ncmID);
    //console.log('DescrNcm:' + DescrNcm);

    //alert(ncmID);
    $("#ncm").val(ncmID);
    $("#descricao_ncm").val(DescrNcm);
    
    $("#dvPopupStatus").hide().fadeOut(350);
    
});
    
</script>







<script>



    $(document).ready(function(){
    
        function subPopulaTipo(){

            //INSERIR_CLIENTE
            let id_cliente = 1;
            var url = '{{ route("tipo.index", ":id_cliente") }}';
                
            url = url.replace('?', '/?');
            url = url.replace(':id_cliente', 'id_cliente=' + id_cliente);
            //console.log('url:' + url);

            $.ajax({ 
                url: url,//"{{route('ncm.getNCMs')}}",
                type: 'post',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "search": id_cliente
                },
                success: function( data ) {
                    //console.log("Response:" + data);
                    //response( data );
                    //var data1 =JSON.stringify(data); 
                    $("#tipo").val([]);

                    $('#tipo')
                        .find('option')
                        .remove()
                        .empty()
                        .end()
                        //.append('<option value="">text</option>')
                        //.val('whatever')

                    for (var i = 0; i < data.length; i++) {
                        $("#tipo").append(new Option(data[i].descricao, data[i].id));
                    }
                   
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                    console.log('status' + xhr.status);
                    console.log('thrownError' + thrownError);
                }
            });

        }
        
        subPopulaTipo();

        $('#imgBuscaAddTipo').on('click', function (e) {   

            //INSERIR_CLIENTE
            let id_cliente = 1;
            var url = '{{ route("tipo.index", ":id_cliente") }}';
                
            url = url.replace('?', '/?');
            url = url.replace(':id_cliente', 'id_cliente=' + id_cliente);
            //console.log('url:' + url);

            $.ajax({ 
                url: url,//"{{route('ncm.getNCMs')}}",
                type: 'post',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "search": id_cliente
                },
                success: function( data ) {
                    //console.log("Response:" + data);
                    //response( data );
                    var data1 =JSON.stringify(data); 
                    //console.log("Response:" + data1);

                    var html = '<style>tr:nth-child(odd){background-color: #f5f5f5;} thead>tr{background-color: #ec971f;}</style>';
                        html += '<table id ="friendsoptionstable">' ;// class="table table-bordered has-warning">';

                        html += '<thead>'
                        html += '<tr> <th class="tablecell" width: "auto !important" style="display:none;">id</th>';
                        html += '<th class="tablecell" width: "auto !important" style="display:none;">id_cliente</th>';
                        html += '<th class="tablecell" width: "auto !important">Descrição</th>';
                        html += '</tr></thead>';
                        html += '<tbody>';

                        //html += '<tr><td>NCM</td><td>Descrição</td><td>Categoria</td><td>Un. Trib.</td><td>Descr. Trib.</td></tr>';
                        for (var i = 0; i < data.length; i++) {
                            
                            html += '<tr><td style="display:none;">' + data[i].id + '</td><td style="display:none;">' + data[i].id_cliente + '</td><td>' + data[i].descricao + '</td>';
                            
                            html += '<td class="actions text-right" style="width:50px;">';
                            html += '<img class="btnSelect" style="height:1.5rem;width:1.5rem;top:45%;right:10%;cursor:pointer;" src="../images/trash.png" data-ncm_id="' + data[i].id + '" />';
                            html += '</td>';

                            html += '</tr>';
                            
                        }

                        //html += '<tr><td>' + data1.id + '</td><td>' + data1.descricao + '</td><td>' + data1.categoria + '</td><td>' + data1.uTrib + '</td><td>' + data1.DescruTrib + '</td></tr>';
                        html += '</tbody>';
                        html += '</table>';


                    $('#ToDisplayResultTipo').html(html);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                    console.log('status' + xhr.status);
                    console.log('thrownError' + thrownError);
                }
            });

            $("#dvPopupTipo").hide().fadeIn(350);
        
        });

        
        $('#btnAddTipo').on('click', function (e) {    


            //INSERIR_CLIENTE
            let descricao = $("#id_tipo").val();
            
            let id_cliente = 1;
            var url = '{{ route("tipo.save", ":id_cliente") }}';
                
            url = url.replace('?', '/?');
            url = url.replace(':id_cliente', 'id_cliente=' + id_cliente + '&descricao=' + descricao );
            //console.log('url:' + url);

            $.ajax({ 
                url: url,//"{{route('ncm.getNCMs')}}",
                type: 'post',
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id_cliente": id_cliente,
                    "descricao": descricao,
                },
                success: function( data ) {

                    console.log(data);
                    console.log(data[0].tipos);
                    var data1 =JSON.stringify(data); 
                    console.log("Response:" + data1);

                    if ( data[0].result.indexOf("sucesso")>0){
                        //$("#selectList").append(new Option(descricao, "value"));
                        subPopulaTipo();
                    }

                    alert(data[0].result);

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                    console.log('status' + xhr.status);
                    console.log('thrownError' + thrownError);
                }
            });

            $("#dvPopupTipo").hide().fadeOut(350);

        });

        $('#btnFechaTipoModal').on('click', function (e) {    
            $("#dvPopupTipo").hide().fadeOut(350);
        });
    
    });  
      
</script>





    