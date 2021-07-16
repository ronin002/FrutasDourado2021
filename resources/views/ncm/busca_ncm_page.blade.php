
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<html>

	<!-- jQuery -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>



<div class="row">
   
    <form  class="form-inline" >{{--  action="{{ route('ncm.search') }}" --}}
        @csrf
        <div class="form-group col-sm-6">
            <label for="exampleInputName2" style="width:250px;">Pesquisar</label> 
            <input type="text" name="search" class="form-control " id="search" placeholder="Pesquisar">
        </div>

        <button class="btn btn-info" id="btnPesquisarNCM" value="Pesquisar">Pesquisar</button>

        <button style="margin-left: 20px;" id="btnFechaStatusModal" class="btn btn-warning">Fechar</button>
    </form>
</div>
<br/>


<div class="row">
    <div class="col-sm-6">
        <h5>Lista de Resultados</h5>
    </div>
   
</div>




<table class="table table-hover">
    <thead>
        <tr>

            <th style="text-align:left;width:450px;">NCM</th>
            <th style="text-align:left;width:100px;">Selecionar</th>
        
        </tr>
    </thead>
    <tbody>
   
    </tbody>
</table>






<script>
   $('#btnFechaStatusModal').on('click', function (e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        //alert('fecha');
        $('[data-popup=popup-dadosNCM]').fadeOut(350);
        e.preventDefault();

        //alertTimerId = 0;
        //jsIniciaTimer();
    });

    $('#btnPesquisarNCM').on('click', function (e) {
        var pesq_ncm = document.getElementById("search").value;
        alert('pesq_ncm' + pesq_ncm );
        var ajaxUrl = '/ncm/search';
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            //url: "../functions_mysql_php.php?id=" + vId,     
            url:  ajaxUrl,  //"../ncm/ncm_result_pesq?pesq_ncm=" + pesq_ncm,        
            //data: {id: vId, table: "tb_produtos"},
            dataType: "json",   //expect html to be returned                
            success: function(response){                    
                //$("#responsecontainer").html(response); 
                console.log('response' + Object.values(response) );
                for (const [key, value] of Object.entries(response)) {
                  console.log(`${key}: ${value}`);
                }

                return response;
            
            },
            error: function (jqXHR, exception) {
                console.log('ERROR NCM_PESQ' );
                console.log('ERROR NCM_PESQ_jqXHR' + jqXHR.responseText );
                console.log('ERROR NCM_PESQ_exception' + exception );
            }

        });
    });
    

    function fncPesquisarNCM(){
        
        var pesq_ncm = document.getElementById("txt_pesq_ncm").value;
        alert('pesq_ncm' + pesq_ncm );
        $.ajax({    //create an ajax request to display.php
            type: "GET",
            //url: "../functions_mysql_php.php?id=" + vId,     
            url: "../produtos/ncm_result_pesq?pesq_ncm=" + pesq_ncm,        
            //data: {id: vId, table: "tb_produtos"},
            dataType: "json",   //expect html to be returned                
            success: function(response){                    
                //$("#responsecontainer").html(response); 
                console.log('response' + Object.values(response) );
                for (const [key, value] of Object.entries(response)) {
                  console.log(`${key}: ${value}`);
                }

                return response;
            
            },
            error: function (jqXHR, exception) {
                console.log('ERROR NCM_PESQ' );
                console.log('ERROR NCM_PESQ_jqXHR' + jqXHR.responseText );
                console.log('ERROR NCM_PESQ_exception' + exception );
            }

        });
    }
    
</script>