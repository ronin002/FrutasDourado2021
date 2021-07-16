<style>
    .lblLabel{
       font-size: 13px;
       font-style: italic;
       color:darkgray; 
    };
</style>
<html>  
    <body>
    <label for="name">Cadastrar </label>

        <div style="border:1px solid yellow; margin-top: 5px;">          
            <br>

            <div class="row" >
                <div class="control">
            
                    <div class="form-group col-md-7" style="margin-left:5px;">
                        <label for="name" class="lblLabel" >Distribuidor</label>
            
                        <input type="text" class="" id="razao_social" name="razao_social" style="width:300px;" >                     
                                    
                        

                    </div>    
                    <div class="form-group col-md-4" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">CNPJ</label>
                        <input type="text" class="" name="cnpj" >                     
                        <input type="hidden" class="" name="id" >                     
                    </div> 
                </div>
            </div>

            <div class="row" >
                <div class="control">
                      
                    <div class="form-group col-md-4" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Inscr. Estadual</label>
                        <input type="text" class="" name="origem_inscr" >                     
                    </div>    
                    <div class="form-group col-md-3" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Telefone</label>
                        <input type="text" class="" name="origem_fone" >                     
                    </div> 
                </div>
            </div>

            <div class="row" >
                <div class="control">
                    <div class="form-group col-md-5" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Endereço</label>
                        <input type="text" class="" name="origem_endereco" style="width:250px;" />                                        
                    </div>    
                    <div class="form-group col-md-2" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Número</label>
                        <input type="text" class="" name="origem_numero" style="width:100px;" />                  
                    </div>    
                    <div class="form-group col-md-2" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Complemento</label>
                        <input type="text" class="" name="origem_complemento" style="width:100px;" />                  
                    </div> 
                </div>
            </div>

            <div class="row" >
                <div class="control">
                    <div class="form-group col-md-3" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Bairro</label>
                        <input type="text" class="" name="origem_endereco" >                                        
                    </div>    
                    <div class="form-group col-md-3" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">Cidade</label>
                        <input type="text" class="" name="origem_cidade" >                     
                    </div>    
                    <div class="form-group col-md-2" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">UF</label>
                        <input type="text" class="" name="origem_uf" style="width:100px;" />                 
                    </div> 
                    <div class="form-group col-md-2" style="margin-left:5px;">
                        <label for="name"  class="lblLabel">CEP</label>
                        <input type="text" class="" name="origem_cep" style="width:100px;" />                  
                    </div> 
                </div>
            </div>
            
        </div>

        <input type="submit" id="btnFechaStatusModal"  class="btn btn-primary" value="Fechar" />
            <!-- <img src="~/images/EditDiagrama/fechar.png" width="35" height="35" alt="Save" /> -->
        
    </body>
</html>
<script>
   $('#btnFechaStatusModal').on('click', function (e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        //alert('fecha');
        $('[data-popup=popup-dadosStatus]').fadeOut(350);
        e.preventDefault();

        //alertTimerId = 0;
        //jsIniciaTimer();
    });
    
</script>