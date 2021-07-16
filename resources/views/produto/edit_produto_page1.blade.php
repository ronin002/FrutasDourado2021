<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Frutas Dourado</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">

                    <h3 class="title has-text-grey">Atualizar de Produtos</h3>
                   
                    <div class="box">
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                  <li>{{$error}}</li>  
                                @endforeach
                                
                            </ul>

                        @endif

                        <form action="{{ route('produto.update',$produto->id) }}" method="put">
                            @csrf
                            @method('put')
                            {{-- <input type="hidden" name="_method" value="UPDATE"> --}}
                             <!-- area de campos do form -->
                            <hr />
                            <div class="row">
                                <input type="hidden" name="id"  value="<?php echo $produto['id']; ?>">
                                <div class="form-group col-md-7">
                                <label for="name">Descrição</label>
                                <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $produto['descricao']; ?>">
                                <!-- <input type="text" class="form-control" name="descricao" value=""> -->
                                </div>

                                <div class="form-group col-md-3">
                                <label for="campo2">NCM</label>
                                <input type="text" class="form-control" id="ncm" name="ncm" value="<?php echo $produto['NCM']; ?>">
                                </div>

                                <div class="form-group col-md-2">
                                <label for="campo3"></label>
                                <!-- <input type="text" class="form-control" name="customer['birthdate']"> -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-5">
                                <label for="campo1">GTIN</label>
                                <input type="text" class="form-control" id="gtin"  name="gtin" value="<?php echo $produto['GTIN']; ?>">
                                </div>

                                <div class="form-group col-md-3">
                                <label for="campo2">Tipo</label>
                                <!-- <input type="text" class="form-control" name="customer['hood']"> -->
                                    <select class="form-control" id="tipo" name="tipo" placeholder="Tipo Produto" value="<?php echo $produto['Tipo']; ?>">
                                        <option value="Fruta">Fruta</option>
                                        <option value="Verdura">Verdura</option>
                                        <option value="Legume">Legume</option>
                                        
                                        
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-2">
                                <label for="campo3">Unidade</label>
                                <!-- <input type="text" class="form-control" name="customer['zip_code']"> -->
                                    <select class="form-control" id="unidade" name="unidade" placeholder="Unidade de venda" value="<?php echo $produto['unidade']; ?>">
                                        <option value="KG">Kg</option>
                                        <option value="Ton">Tonelada</option>
                                        <option value="unidade">un</option>
                                        <option value="Saca">Saca</option>
                                        
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-2">
                                <!-- <label for="campo3">Data de Cadastro</label>
                                <input type="text" class="form-control" name="customer['created']" disabled> -->
                                </div>
                            </div>
                            
                            <!-- <div class="row">
                                <div class="form-group col-md-3">
                                <label for="campo1">Município</label>
                                <input type="text" class="form-control" name="customer['city']">
                                </div>
                                
                                <div class="form-group col-md-2">
                                <label for="campo2">Telefone</label>
                                <input type="text" class="form-control" name="customer['phone']">
                                </div>
                                
                                <div class="form-group col-md-2">
                                <label for="campo3">Celular</label>
                                <input type="text" class="form-control" name="customer['mobile']">
                                </div>
                                
                                <div class="form-group col-md-1">
                                <label for="campo3">UF</label>
                                <input type="text" class="form-control" name="customer['state']">
                                </div>
                                
                                <div class="form-group col-md-2">
                                <label for="campo3">Inscrição Estadual</label>
                                <input type="text" class="form-control" name="customer['ie']">
                                </div>
                                
                                <div class="form-group col-md-2">
                                <label for="campo3">UF</label>
                                <input type="text" class="form-control">
                                </div>
                            </div> -->
                            
                            <div id="actions" class="row">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Salvar</button>
                                <a href="../produtos/list_prod_page.php" class="btn btn-default">Cancelar</a>
                                </div>
                            </div>



                            <!-- <div class="field">
                                <div class="control">
                                    <input name="descricao" name="text" class="input is-large" placeholder="Descrição" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="NCM" name="text" class="input is-large" placeholder="NCM" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="GTIN" name="text" class="input is-large" placeholder="GTIN" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="tipo" name="text" class="input is-large" placeholder="Tipo" autofocus=""> 
                                    <table>
                                        <tr>
                                            <td style="width:200px;">
                                                Tipo:
                                            </td>
                                            <td style="width:200px;">
                                                <select class="form-control" id="tipo" name="tipo" placeholder="Tipo Produto">
                                                    <option value="Fruta">Fruta</option>
                                                    <option value="Verdura">Verdura</option>
                                                    <option value="Legume">Legume</option>
                                                   
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                    </table>

                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                <table>
                                        <tr>
                                            <td style="width:200px;">
                                                Unidade:
                                            </td>
                                            <td style="width:200px;">
                                                <select class="form-control" id="unidade" name="unidade" placeholder="Unidade de venda">
                                                    <option value="KG">Kg</option>
                                                    <option value="Ton">Tonelada</option>
                                                    <option value="unidade">un</option>
                                                    <option value="Saca">Saca</option>
                                                    
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div> 
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Salvar Produto</button>
                            -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
</body>

</html>